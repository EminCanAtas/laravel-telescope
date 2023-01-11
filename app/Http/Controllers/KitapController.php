<?php

namespace App\Http\Controllers;

use App\Events\UpdateLog;
use App\Jobs\DeleteKitap;
use App\Models\Kitap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class KitapController extends Controller
{
    public function read()
    {
        $kitaplar = Cache::remember('kitaplar',3600,function (){
            return Kitap::with('yazar')->get();
        });

        dd('Kitaplar yazar relationları ile getirildi.',$kitaplar);
    }

    public function update($name,$id)
    {
        Kitap::find($id)->update([
            'kitap_adı' => $name
        ]);

        event(new UpdateLog($id));

        dd($id. " id' li kitabın ismi güncellendi. Log başarıyla oluşturuldu.");

    }

    public function delete($id)
    {
        DeleteKitap::dispatch($id)->onQueue('high');

        dd($id. " id' li kitap silinme sırasına alındı. 'php artisan queue:work' komutu ile sırayı çalıştırabilirsiniz.");
    }
}

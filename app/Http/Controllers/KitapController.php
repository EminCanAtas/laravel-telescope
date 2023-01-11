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
}

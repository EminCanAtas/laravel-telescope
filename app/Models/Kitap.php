<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitap extends Model
{
    const TURKCE = "Türkçe";

    const INGILIZCE = "İngilizce";

    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['kitap_adı'];

    protected $table = 'kitaplar';

    public function yazar()
    {
        return $this->hasOne(Yazar::class,'id','yazar_id');
    }
}

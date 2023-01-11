<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitaplar', function (Blueprint $table) {
            $table->id();
            $table->integer('yazar_id');
            $table->tinyText('kitap_adı');
            $table->enum('dil',['Türkçe','İngilizce']);
            $table->integer('baskı_uzunluğu');
            $table->string('yayıncı');
            $table->bigInteger('ISBN-10');
            $table->string('ISBN-13');
            $table->date('yayımlanma_tarihi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kitaplar');
    }
};

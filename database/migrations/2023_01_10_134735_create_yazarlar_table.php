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
        Schema::create('yazarlar', function (Blueprint $table) {
            $table->id();
            $table->tinyText('adı');
            $table->tinyText('soyadı');
            $table->date('doğum_tarihi');
            $table->tinyInteger('kitap_sayısı');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yazarlar');
    }
};

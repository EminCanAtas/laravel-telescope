<?php

namespace Database\Seeders;

use App\Models\Yazar;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class YazarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Yazar::query()->insert(
            [
                [
                    'adı'          => 'John Ronald Reuel',
                    'soyadı'       => 'Tolkien ',
                    'doğum_tarihi' => Carbon::parse('03-01-1892')->format('Y-m-d'),
                    'kitap_sayısı' => 100,
                ],
                [
                    'adı'          => 'George',
                    'soyadı'       => 'Orwell',
                    'doğum_tarihi' => Carbon::parse('25-06-1903')->format('Y-m-d'),
                    'kitap_sayısı' => 153,
                ],
                [
                    'adı'          => 'Stephen',
                    'soyadı'       => 'King',
                    'doğum_tarihi' => Carbon::parse('21-09-1947')->format('Y-m-d'),
                    'kitap_sayısı' => 200,
                ]
            ]
        );
    }
}

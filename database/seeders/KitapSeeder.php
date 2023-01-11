<?php

namespace Database\Seeders;

use App\Models\Kitap;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KitapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kitap::query()->insert(
            [
                [
                    'yazar_id'          => 1,
                    'kitap_adı'         => 'Yüzüklerin Efendisi: Yüzük Kardeşliği',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 496,
                    'yayıncı'           => 'Metis Yayıncılık',
                    'ISBN-10'           => 9753425988,
                    'ISBN-13'           => '978 - 9753425988',
                    'yayımlanma_tarihi' => Carbon::parse('06-01-2016')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 1,
                    'kitap_adı'         => 'Yüzüklerin Efendisi: İki Kule',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 416,
                    'yayıncı'           => 'Metis Yayıncılık',
                    'ISBN-10'           => 9753421818,
                    'ISBN-13'           => '978 - 9753421812',
                    'yayımlanma_tarihi' => Carbon::parse('06-01-2015')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 1,
                    'kitap_adı'         => 'The Silmarillion',
                    'dil'               => Kitap::INGILIZCE,
                    'baskı_uzunluğu'    => 696,
                    'yayıncı'           => 'Harper Collins Publ. UK',
                    'ISBN-10'           => 0007523222,
                    'ISBN-13'           => '978 - 0007523221',
                    'yayımlanma_tarihi' => Carbon::parse('01-08-2013')->format("Y-m-d"),

                ],
                [
                    'yazar_id'          => 1,
                    'kitap_adı'         => 'Bitmemiş Öyküler',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 776,
                    'yayıncı'           => 'İthaki Yayınları',
                    'ISBN-10'           => 6057762762,
                    'ISBN-13'           => '978 - 6057762764',
                    'yayımlanma_tarihi' => Carbon::parse('03-03-2020')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 1,
                    'kitap_adı'         => '1984',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 352,
                    'yayıncı'           => 'Can Yayınları',
                    'ISBN-10'           => 9750718534,
                    'ISBN-13'           => '978 - 9750718533',
                    'yayımlanma_tarihi' => Carbon::parse('17-11-2016')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 1,
                    'kitap_adı'         => 'Hayvan Çiftliği',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 152,
                    'yayıncı'           => 'Can Yayınları',
                    'ISBN-10'           => 9750719387,
                    'ISBN-13'           => '978 - 9750719387',
                    'yayımlanma_tarihi' => Carbon::parse('01-01-2001')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 1,
                    'kitap_adı'         => 'Bir İdam',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 120,
                    'yayıncı'           => 'Can Yayınları',
                    'ISBN-10'           => 9750748832,
                    'ISBN-13'           => '978 - 9750748837',
                    'yayımlanma_tarihi' => Carbon::parse('12-01-2021')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 2,
                    'kitap_adı'         => 'Mahşer',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 1216,
                    'yayıncı'           => 'Altın Kitaplar',
                    'ISBN-10'           => 9752114075,
                    'ISBN-13'           => '978 - 9752114074',
                    'yayımlanma_tarihi' => Carbon::parse('06-01-2017')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 2,
                    'kitap_adı'         => 'Hayvan Mezarlığı',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 399,
                    'yayıncı'           => 'Altın Kitaplar',
                    'ISBN-10'           => 9754051526,
                    'ISBN-13'           => '978 - 9754051520',
                    'yayımlanma_tarihi' => Carbon::parse('06-01-2017')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 2,
                    'kitap_adı'         => 'Medyum',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 400,
                    'yayıncı'           => 'Altın Kitaplar',
                    'ISBN-10'           => 9754055858,
                    'ISBN-13'           => '978 - 9754055856',
                    'yayımlanma_tarihi' => Carbon::parse('01-01-2019')->format("Y-m-d"),
                ],
                [
                    'yazar_id'          => 2,
                    'kitap_adı'         => 'Doktor Uyku',
                    'dil'               => Kitap::TURKCE,
                    'baskı_uzunluğu'    => 544,
                    'yayıncı'           => 'Altın Kitaplar',
                    'ISBN-10'           => 9752117236,
                    'ISBN-13'           => '978 - 9752117235',
                    'yayımlanma_tarihi' => Carbon::parse('01-01-2013')->format("Y-m-d"),
                ],
            ]
        );
    }
}

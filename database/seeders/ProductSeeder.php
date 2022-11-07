<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'nama' => 'Robusta',
                    'deskripsi' => 'Kopi Robusta merupakan keturunan beberapa spesies kopi, terutama Coffea canephora. Jenis kopi ini tumbuh baik di ketinggian 400-700 m dpl, temperatur 21-24° C dengan bulan kering 3-4 bulan secara berturut-turut dan 3-4 kali hujan kiriman. Kualitas buah lebih rendah dari Arabika dan Liberika.',
                ],
                [
                    'nama' => 'Arabica',
                    'deskripsi' => 'Kopi arabika, juga dikenal sebagai kopi Arab, kopi semak Arab, atau kopi gunung, adalah spesies dari genus Coffea. Spesies ini diyakini sebagai spesies kopi pertama yang dibudidayakan, dan merupakan kultivar dominan, mewakili sekitar 60% dari produksi kopi global.',
                ],
                // [
                //     'nama' => 'Luwak',
                //     'deskripsi' => 'Ini Contoh Deskripsi Kopi Luwak',
                // ],
                // [
                //     'nama' => 'Aceh Gayo',
                //     'deskripsi' => 'Ini Contoh Deskripsi Kopi Aceh Gayo',
                // ]
            ]
        );
    }
}

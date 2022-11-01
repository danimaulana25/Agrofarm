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
                    'deskripsi' => 'Ini Contoh Deskripsi Kopi Robusta',
                ],
                [
                    'nama' => 'Arabika',
                    'deskripsi' => 'Ini Contoh Deskripsi Kopi Arabika',
                ],
                [
                    'nama' => 'Luwak',
                    'deskripsi' => 'Ini Contoh Deskripsi Kopi Luwak',
                ],
                [
                    'nama' => 'Aceh Gayo',
                    'deskripsi' => 'Ini Contoh Deskripsi Kopi Aceh Gayo',
                ]
            ]
        );
    }
}

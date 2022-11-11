<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengambilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengambilans')->insert(
            [
                [
                    'nama_pengambil' => 'Joko',
                    'category_id' => 1,
                    'jumlah' => 20,
                    'lokasi' => 'Malang',
                    'tanggal_ambil' => '2022-10-20',
                    'status' => 1
                ],
                [
                    'nama_pengambil' => 'Kasino',
                    'category_id' => 2,
                    'jumlah' => 15,
                    'lokasi' => 'Pasuruan',
                    'tanggal_ambil' => '2022-10-12',
                    'status' => 1
                ],
                [
                    'nama_pengambil' => 'Indro',
                    'category_id' => 5,
                    'jumlah' => 22,
                    'lokasi' => 'Surabaya',
                    'tanggal_ambil' => '2022-10-19',
                    'status' => 1
                ],
                [
                    'nama_pengambil' => 'Julie',
                    'category_id' => 6,
                    'jumlah' => 23,
                    'lokasi' => 'Mojokerto',
                    'tanggal_ambil' => '2022-10-26',
                    'status' => 1
                ],
            ]
        );
    }
}

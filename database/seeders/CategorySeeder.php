<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'nama' => 'Robusta',
                    'grade' => 'Grade 1',
                ],
                [
                    'nama' => 'Robusta',
                    'grade' => 'Grade 2',
                ],
                [
                    'nama' => 'Robusta',
                    'grade' => 'Grade 3',
                ],
                [
                    'nama' => 'Robusta',
                    'grade' => 'Grade 4',
                ],
                [
                    'nama' => 'Arabica',
                    'grade' => 'Grade 1',
                ],
                [
                    'nama' => 'Arabica',
                    'grade' => 'Spesoalty Grade',
                ],
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DFBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('df_bukus')->insert([
            // 'noUrut' => '1',
            'judulBuku' => 'Strategi Futsal',
            'namaPengarang' => 'Justinus Lhaksana',
            'tahunTerbit' => '2011',
            'genre' => 'Olahraga',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapels')->insert([
            'nama_mapel' => ' Instalasi Jaringan',
            'jurusan_id' => 1,
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Basis Data',
            'jurusan_id' => 2,
        ]);
    }
}

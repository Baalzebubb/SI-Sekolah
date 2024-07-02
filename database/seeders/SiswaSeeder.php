<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Bulan Sutena',
            'nis' => '123454321',
            'kelas_id' => 1,
            'telp' => '081234567890',
            'alamat' => 'Brang Rea',
        ]);

        DB::table('siswas')->insert([
            'nama' => 'Denny Gustawan',
            'nis' => '543212345',
            'kelas_id' => 2,
            'telp' => '089876543210',
            'alamat' => 'Lempeh',
        ]);
    }
}

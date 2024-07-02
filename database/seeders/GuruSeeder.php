<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nama' => 'Hendri Irawanto',
            'nip' => '1234567890',
            'mapel_id' => 1,
            'no_telp' => '081234567890',
            'alamat' => 'Sumbawa Besar',
        ]);

        DB::table('gurus')->insert([
            'nama' => 'Yuyun Tri Warti',
            'nip' => '0987654321',
            'mapel_id' => 2,
            'no_telp' => '089876543210',
            'alamat' => 'Brang Biji',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('uts')->insert([
            [
                'nama_matkul' => 'Pemrograman Web',
                'jumlah_sks' => 3,
                'keterangan' => 'Belajar Laravel dan Blade Template',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_matkul' => 'Database',
                'jumlah_sks' => 2,
                'keterangan' => 'Belajar MySQL dan Relasi Tabel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

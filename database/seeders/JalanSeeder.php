<?php

namespace Database\Seeders;

use App\Models\Jalan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jalan::create([
            'kode' => 'JLN001',
            'kabupaten_kode' => 'KAB001',
            'panjang' => 100.50,
            'keterangan' => 'Jalan raya utama',
            'created_by' => 1,
        ]);

        Jalan::create([
            'kode' => 'JLN002',
            'kabupaten_kode' => 'KAB001',
            'panjang' => 75.25,
            'keterangan' => 'Jalan lingkungan',
            'created_by' => 1,
        ]);
    }
}

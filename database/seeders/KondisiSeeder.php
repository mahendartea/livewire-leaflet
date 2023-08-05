<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KondisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kondisis = [
            [
                'nama' => 'Mantap',
                'keterangan' => 'Baik',
            ],
            [
                'nama' => 'Rusak Ringan',
                'keterangan' => 'Rusak Ringan',
            ],
            [
                'nama' => 'Rusak Berat',
                'keterangan' => 'Rusak Berat',
            ],
        ];

        foreach ($kondisis as $kondisi) {
            \App\Models\Kondisi::create($kondisi);
        }
    }
}

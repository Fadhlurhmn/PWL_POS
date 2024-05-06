<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'KCK',
                'kategori_nama' => 'Kecantikan',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'PRT',
                'kategori_nama' => 'Perlengkapan Rumah',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'ALE',
                'kategori_nama' => 'Alat Elektronik',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'AKS',
                'kategori_nama' => 'Aksesoris Komputer dan HP',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'DPR',
                'kategori_nama' => 'Dapur',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}

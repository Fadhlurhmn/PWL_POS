<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Rizky',
                'penjualan_kode' => 'J001',
                'penjualan_tanggal' => '2024-02-28 17:38:29',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Arya',
                'penjualan_kode' => 'J002',
                'penjualan_tanggal' => '2024-02-27 16:38:29',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Sandi',
                'penjualan_kode' => 'J003',
                'penjualan_tanggal' => '2024-02-26 15:38:29',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Rafsan',
                'penjualan_kode' => 'J004',
                'penjualan_tanggal' => '2024-02-25 13:38:29',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Gaco',
                'penjualan_kode' => 'J005',
                'penjualan_tanggal' => '2024-02-24 12:38:29',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Miku',
                'penjualan_kode' => 'J006',
                'penjualan_tanggal' => '2024-02-24 13:38:29',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Alhad',
                'penjualan_kode' => 'J007',
                'penjualan_tanggal' => '2024-02-23 11:38:29',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Adit',
                'penjualan_kode' => 'J006',
                'penjualan_tanggal' => '2024-02-22 10:38:29',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Razan',
                'penjualan_kode' => 'J007',
                'penjualan_tanggal' => '2024-02-21 12:38:29',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Chandra',
                'penjualan_kode' => 'J008',
                'penjualan_tanggal' => '2024-02-20 14:38:29',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}

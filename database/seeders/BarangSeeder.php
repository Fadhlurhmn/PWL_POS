<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MAR',
                'barang_nama' => 'Marina',
                'harga_beli' => 20000,
                'harga_jual' => 22000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'SPU',
                'barang_nama' => 'Sapu Lidi',
                'harga_beli' => 10000,
                'harga_jual' => 11000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'KPS',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 30000,
                'harga_jual' => 33000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'CAS',
                'barang_nama' => 'Casing Hp',
                'harga_beli' => 60000,
                'harga_jual' => 62000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'PAN',
                'barang_nama' => 'Panci',
                'harga_beli' => 35000,
                'harga_jual' => 36000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'SOF',
                'barang_nama' => 'Sofa',
                'harga_beli' => 80000,
                'harga_jual' => 82000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 3,
                'barang_kode' => 'JTG',
                'barang_nama' => 'Jam Tangan',
                'harga_beli' => 60000,
                'harga_jual' => 62000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 5,
                'barang_kode' => 'SPT',
                'barang_nama' => 'Spatula',
                'harga_beli' => 20000,
                'harga_jual' => 21000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 1,
                'barang_kode' => 'NIV',
                'barang_nama' => 'Nivea',
                'harga_beli' => 40000,
                'harga_jual' => 43000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'TPG',
                'barang_nama' => 'Tempered Glass',
                'harga_beli' => 50000,
                'harga_jual' => 52000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}

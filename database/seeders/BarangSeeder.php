<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'MKN001', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['kategori_id' => 1, 'barang_kode' => 'MKN002', 'barang_nama' => 'Ayam Geprek', 'harga_beli' => 12000, 'harga_jual' => 18000],
            ['kategori_id' => 2, 'barang_kode' => 'MNM001', 'barang_nama' => 'Es Teh Manis', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['kategori_id' => 2, 'barang_kode' => 'MNM002', 'barang_nama' => 'Kopi Hitam', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['kategori_id' => 3, 'barang_kode' => 'SNK001', 'barang_nama' => 'Keripik Kentang', 'harga_beli' => 7000, 'harga_jual' => 12000],
            ['kategori_id' => 3, 'barang_kode' => 'SNK002', 'barang_nama' => 'Coklat Batang', 'harga_beli' => 8000, 'harga_jual' => 13000],
            ['kategori_id' => 4, 'barang_kode' => 'SBK001', 'barang_nama' => 'Beras 5kg', 'harga_beli' => 50000, 'harga_jual' => 60000],
            ['kategori_id' => 4, 'barang_kode' => 'SBK002', 'barang_nama' => 'Minyak Goreng 1L', 'harga_beli' => 14000, 'harga_jual' => 17000],
            ['kategori_id' => 5, 'barang_kode' => 'OBT001', 'barang_nama' => 'Paracetamol', 'harga_beli' => 2000, 'harga_jual' => 5000],
            ['kategori_id' => 5, 'barang_kode' => 'OBT002', 'barang_nama' => 'Vitamin C', 'harga_beli' => 5000, 'harga_jual' => 10000],
        ];

        \DB::table('m_barang')->insert($data);

    }
}

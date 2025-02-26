<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id' => 3, 'pembeli' => 'Andi', 'penjualan_kode' => 'PNJ001', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' => 'PNJ002', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Citra', 'penjualan_kode' => 'PNJ003', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Dewi', 'penjualan_kode' => 'PNJ004', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Eka', 'penjualan_kode' => 'PNJ005', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Fajar', 'penjualan_kode' => 'PNJ006', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Gina', 'penjualan_kode' => 'PNJ007', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Hadi', 'penjualan_kode' => 'PNJ008', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Indah', 'penjualan_kode' => 'PNJ009', 'penjualan_tanggal' => now()],
            ['user_id' => 3, 'pembeli' => 'Joko', 'penjualan_kode' => 'PNJ010', 'penjualan_tanggal' => now()],
        ];

        \DB::table('t_penjualan')->insert($data);
    }
}

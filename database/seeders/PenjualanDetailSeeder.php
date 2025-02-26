<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $penjualan_id = 1;

        for ($i=1; $i <= 30; $i++) { 
            $barang_id = rand(1, 10);
            $jumlah = rand(1, 10);

            $harga = \DB::table('m_barang')->where('barang_id', $barang_id)->value('harga_jual');

            $data[] = [
                'penjualan_id' => $penjualan_id,
                'barang_id' => $barang_id,
                'jumlah' => $jumlah,
                'harga' => $harga,
            ];

            if ($i % 3 == 0) {
                $penjualan_id++;
            }
        }
        \DB::table('t_penjualan_detail')->insert($data);
    }
}

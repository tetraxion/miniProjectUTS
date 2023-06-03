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
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'B001',
                'nama_barang' => 'Motor Beat',
                'harga_barang' => 150000000,
                'deskripsi_barang' => 'Motor Beat warna hitam',
                'satuan_id' => 1,
            ],
            [
                'kode_barang' => 'B002',
                'nama_barang' => 'Laptop Acer Nitro',
                'harga_barang' => 10000000,
                'deskripsi_barang' => 'Laptop Acer Nitro Core I7',
                'satuan_id' => 2,
            ],
            [
                'kode_barang' => 'B003',
                'nama_barang' => 'Beras',
                'harga_barang' => 2000000,
                'deskripsi_barang' => 'Beras Koi 2 karung',
                'satuan_id' => 3,
            ],
            [
                'kode_barang' => 'B004',
                'nama_barang' => 'Air Mineral Asli dari pegunuangan',
                'harga_barang' => 7000000,
                'deskripsi_barang' => 'Air Mineral Asli dari pegunuangan untuk mengisi kolam Koi sebanyak 5000liter',
                'satuan_id' => 4,
            ],
            [
                'kode_barang' => 'B005',
                'nama_barang' => 'Kain Batik Parang',
                'harga_barang' => 900000,
                'deskripsi_barang' => 'Kain Batik Parang 5meter ',
                'satuan_id' => 5,
            ],
        ]);
    }
}

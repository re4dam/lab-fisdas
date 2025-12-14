<?php
// PanduanKeselamatanSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanduanPenggunaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('panduan_penggunaan')->insert([
            // Panduan Penggunaan Osiloskop Digital (id_barang = 1)
            [
                'id_barang' => 1,
                'tahap_penggunaan' => 'Persiapan dan Kalibrasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 1,
                'tahap_penggunaan' => 'Koneksi dan Pengaturan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 1,
                'tahap_penggunaan' => 'Pembacaan dan Analisis',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Penggunaan Multimeter Digital (id_barang = 2)
            [
                'id_barang' => 2,
                'tahap_penggunaan' => 'Persiapan Alat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'tahap_penggunaan' => 'Pengukuran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'tahap_penggunaan' => 'Pembacaan Hasil',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Penggunaan Function Generator (id_barang = 3)
            [
                'id_barang' => 3,
                'tahap_penggunaan' => 'Inisialisasi Sistem',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'tahap_penggunaan' => 'Konfigurasi Sinyal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'tahap_penggunaan' => 'Output dan Verifikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Penggunaan Power Supply DC (id_barang = 4)
            [
                'id_barang' => 4,
                'tahap_penggunaan' => 'Setup Awal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'tahap_penggunaan' => 'Pengaturan Parameter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'tahap_penggunaan' => 'Aktivasi dan Monitoring',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Penggunaan Breadboard Kit (id_barang = 5)
            [
                'id_barang' => 5,
                'tahap_penggunaan' => 'Persiapan Breadboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'tahap_penggunaan' => 'Perakitan Rangkaian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'tahap_penggunaan' => 'Testing dan Troubleshooting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
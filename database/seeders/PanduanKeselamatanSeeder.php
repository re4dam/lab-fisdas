<?php
// PanduanKeselamatanSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanduanKeselamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('panduan_keselamatan')->insert([
            // Panduan Keselamatan Osiloskop Digital (id_barang = 1)
            [
                'id_barang' => 1,
                'deskripsi_keselamatan' => 'Jangan menyentuh probe atau kabel yang terhubung ke rangkaian bertegangan tinggi tanpa alat pelindung yang sesuai. Gunakan probe dengan isolasi yang baik dan pastikan tangan dalam keadaan kering.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 1,
                'deskripsi_keselamatan' => 'Pastikan ground osiloskop terhubung dengan baik ke ground rangkaian untuk menghindari floating ground yang dapat menyebabkan pembacaan tidak akurat atau kerusakan alat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 1,
                'deskripsi_keselamatan' => 'Gunakan probe dengan rating tegangan yang sesuai. Jangan menggunakan probe 1x untuk mengukur tegangan tinggi, gunakan probe 10x atau probe khusus high voltage. Periksa kondisi probe secara berkala.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Keselamatan Multimeter Digital (id_barang = 2)
            [
                'id_barang' => 2,
                'deskripsi_keselamatan' => 'Pastikan selector switch berada pada posisi dan range yang benar sebelum melakukan pengukuran. Pengaturan yang salah dapat merusak multimeter atau menyebabkan sengatan listrik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'deskripsi_keselamatan' => 'Jangan pernah mengukur tegangan saat selector berada pada posisi arus (A atau mA), karena ini akan menyebabkan hubung singkat. Selalu periksa posisi probe pada terminal yang benar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'deskripsi_keselamatan' => 'Saat mengukur tegangan atau arus tinggi, pegang probe hanya pada bagian yang terisolasi. Jangan menyentuh ujung logam probe saat rangkaian dalam kondisi aktif untuk menghindari sengatan listrik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Keselamatan Function Generator (id_barang = 3)
            [
                'id_barang' => 3,
                'deskripsi_keselamatan' => 'Pastikan amplitudo output tidak melebihi rating maksimum komponen yang terhubung. Tegangan berlebih dapat merusak komponen sensitif dalam rangkaian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'deskripsi_keselamatan' => 'Jangan menghubungkan output function generator langsung ke sumber tegangan lain atau ke ground tanpa impedansi yang sesuai. Hal ini dapat menyebabkan kerusakan pada output amplifier internal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'deskripsi_keselamatan' => 'Matikan output sebelum menghubungkan atau melepaskan kabel BNC untuk menghindari transient voltage yang dapat merusak komponen atau menyebabkan percikan api.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Keselamatan Power Supply DC (id_barang = 4)
            [
                'id_barang' => 4,
                'deskripsi_keselamatan' => 'Selalu atur current limit sebelum menghidupkan output untuk melindungi rangkaian dari arus berlebih yang dapat menyebabkan kerusakan komponen atau kebakaran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'deskripsi_keselamatan' => 'Periksa polaritas koneksi sebelum menyalakan output. Pembalikan polaritas dapat merusak komponen elektronik, terutama IC, kapasitor elektrolit, dan transistor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'deskripsi_keselamatan' => 'Jangan menyentuh terminal output atau kabel saat output dalam kondisi ON, terutama pada tegangan tinggi. Matikan output terlebih dahulu sebelum melakukan perubahan koneksi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Panduan Keselamatan Breadboard Kit (id_barang = 5)
            [
                'id_barang' => 5,
                'deskripsi_keselamatan' => 'Pastikan tidak ada hubung singkat antara jalur VCC dan ground sebelum menghubungkan sumber tegangan. Gunakan multimeter untuk mengecek kontinuitas dan mencegah short circuit.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'deskripsi_keselamatan' => 'Perhatikan polaritas komponen seperti LED, kapasitor elektrolit, dan dioda. Pemasangan terbalik dapat menyebabkan komponen meledak atau terbakar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'deskripsi_keselamatan' => 'Jangan memasukkan atau mencabut komponen saat rangkaian dalam kondisi hidup. Matikan sumber tegangan terlebih dahulu untuk menghindari kerusakan komponen dan percikan listrik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komponen')->insert([
            // Komponen Osiloskop Digital (id_barang = 1)
            [
                'id_barang' => 1,
                'nama_komponen' => 'Layar LCD Display',
                'deskripsi' => 'Layar digital untuk menampilkan bentuk gelombang dan pengaturan parameter osiloskop.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 1,
                'nama_komponen' => 'Probe Input Channel',
                'deskripsi' => 'Kabel probe untuk menghubungkan osiloskop dengan rangkaian yang akan diukur. Biasanya tersedia 2-4 channel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 1,
                'nama_komponen' => 'Control Panel',
                'deskripsi' => 'Panel kontrol dengan tombol dan knob untuk mengatur skala vertikal, horizontal, trigger, dan pengaturan lainnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 1,
                'nama_komponen' => 'Port USB/Storage',
                'deskripsi' => 'Port untuk menyimpan data hasil pengukuran ke flashdisk atau menghubungkan ke komputer.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Komponen Multimeter Digital (id_barang = 2)
            [
                'id_barang' => 2,
                'nama_komponen' => 'Display Digital',
                'deskripsi' => 'Layar LCD untuk menampilkan hasil pengukuran dalam bentuk angka digital.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'nama_komponen' => 'Test Probe Merah dan Hitam',
                'deskripsi' => 'Kabel probe merah (positif) dan hitam (negatif/ground) untuk melakukan pengukuran pada rangkaian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'nama_komponen' => 'Selector Switch',
                'deskripsi' => 'Selektor putar untuk memilih mode pengukuran (Voltage AC/DC, Current, Resistance, dll) dan range pengukuran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'nama_komponen' => 'Terminal Input Port',
                'deskripsi' => 'Port input COM, VΩ, dan mA/A untuk memasang probe sesuai jenis pengukuran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Komponen Function Generator (id_barang = 3)
            [
                'id_barang' => 3,
                'nama_komponen' => 'Output Terminal',
                'deskripsi' => 'Terminal output BNC untuk mengeluarkan sinyal yang dihasilkan ke rangkaian atau osiloskop.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'nama_komponen' => 'Frequency Control',
                'deskripsi' => 'Tombol atau knob untuk mengatur frekuensi output sinyal dari Hz hingga MHz.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'nama_komponen' => 'Waveform Selector',
                'deskripsi' => 'Tombol pemilih bentuk gelombang: sinusoidal, kotak (square), segitiga (triangle), dan sawtooth.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'nama_komponen' => 'Amplitude Control',
                'deskripsi' => 'Pengatur amplitudo atau tegangan puncak-ke-puncak dari sinyal output.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Komponen Power Supply DC (id_barang = 4)
            [
                'id_barang' => 4,
                'nama_komponen' => 'Voltage Display',
                'deskripsi' => 'Display digital untuk menampilkan tegangan output yang sedang dikeluarkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'nama_komponen' => 'Current Display',
                'deskripsi' => 'Display digital untuk menampilkan arus yang mengalir pada beban.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'nama_komponen' => 'Voltage/Current Adjustment Knob',
                'deskripsi' => 'Knob pengatur untuk menyetel tegangan dan batas arus output sesuai kebutuhan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'nama_komponen' => 'Output Terminal (+/-)',
                'deskripsi' => 'Terminal output positif dan negatif untuk menghubungkan power supply ke rangkaian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Komponen Breadboard Kit (id_barang = 5)
            [
                'id_barang' => 5,
                'nama_komponen' => 'Breadboard Plate',
                'deskripsi' => 'Papan berlubang dengan koneksi internal untuk memasang komponen elektronik tanpa solder.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'nama_komponen' => 'Kabel Jumper',
                'deskripsi' => 'Kabel penghubung dengan berbagai panjang untuk menghubungkan antar komponen di breadboard.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'nama_komponen' => 'Power Rail',
                'deskripsi' => 'Jalur khusus di sisi breadboard untuk distribusi tegangan positif dan ground.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'nama_komponen' => 'Komponen Elektronik Dasar',
                'deskripsi' => 'Set komponen seperti resistor, kapasitor, LED, dan transistor untuk eksperimen dasar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
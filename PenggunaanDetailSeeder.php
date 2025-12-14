<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penggunaan_detail')->insert([
            // Detail untuk Osiloskop - Tahap 1: Persiapan dan Kalibrasi (id_pand_penggunaan = 1)
            [
                'id_pand_penggunaan' => 1,
                'deskripsi_penggunaan' => 'Hubungkan osiloskop ke sumber listrik dan tekan tombol power untuk menyalakan alat. Tunggu hingga layar menampilkan grid dan sistem siap.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 1,
                'deskripsi_penggunaan' => 'Tekan tombol AUTO SET atau DEFAULT SETUP untuk mengembalikan pengaturan ke kondisi standar pabrik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 1,
                'deskripsi_penggunaan' => 'Lakukan kalibrasi probe dengan menghubungkan probe ke terminal kalibrasi (biasanya menghasilkan sinyal kotak 1kHz, 5V). Sesuaikan trimmer pada probe hingga gelombang terlihat sempurna.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Osiloskop - Tahap 2: Koneksi dan Pengaturan (id_pand_penggunaan = 2)
            [
                'id_pand_penggunaan' => 2,
                'deskripsi_penggunaan' => 'Hubungkan probe channel 1 (atau channel yang dipilih) ke rangkaian yang akan diukur. Pastikan ground probe terhubung ke ground rangkaian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 2,
                'deskripsi_penggunaan' => 'Atur skala vertikal (Volt/div) menggunakan knob channel agar gelombang terlihat jelas di layar, tidak terlalu besar atau terlalu kecil.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 2,
                'deskripsi_penggunaan' => 'Atur skala horizontal (Time/div) untuk menyesuaikan periode gelombang yang ditampilkan. Atur juga trigger level agar gelombang stabil dan tidak bergerak.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Osiloskop - Tahap 3: Pembacaan dan Analisis (id_pand_penggunaan = 3)
            [
                'id_pand_penggunaan' => 3,
                'deskripsi_penggunaan' => 'Baca amplitudo gelombang dengan menghitung jumlah kotak vertikal dan kalikan dengan skala Volt/div yang digunakan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 3,
                'deskripsi_penggunaan' => 'Ukur periode gelombang dengan menghitung jumlah kotak horizontal untuk satu siklus penuh, lalu kalikan dengan skala Time/div. Frekuensi adalah 1/periode.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 3,
                'deskripsi_penggunaan' => 'Gunakan fitur MEASURE atau CURSOR untuk pengukuran yang lebih akurat. Simpan data jika diperlukan melalui port USB.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Multimeter - Tahap 1: Persiapan Alat (id_pand_penggunaan = 4)
            [
                'id_pand_penggunaan' => 4,
                'deskripsi_penggunaan' => 'Periksa kondisi multimeter dan pastikan baterai masih cukup. Nyalakan multimeter dengan memutar selector switch.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 4,
                'deskripsi_penggunaan' => 'Pasang probe merah ke terminal VΩ dan probe hitam ke terminal COM untuk pengukuran tegangan dan resistansi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 4,
                'deskripsi_penggunaan' => 'Putar selector switch ke mode pengukuran yang sesuai (V DC, V AC, Ω, A, dll) dan pilih range yang tepat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Multimeter - Tahap 2: Pengukuran (id_pand_penggunaan = 5)
            [
                'id_pand_penggunaan' => 5,
                'deskripsi_penggunaan' => 'Untuk mengukur tegangan, hubungkan probe secara paralel dengan komponen atau sumber tegangan yang akan diukur.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 5,
                'deskripsi_penggunaan' => 'Untuk mengukur arus, putuskan rangkaian dan hubungkan multimeter secara seri. Pindahkan probe merah ke terminal mA atau A sesuai besar arus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 5,
                'deskripsi_penggunaan' => 'Untuk mengukur resistansi, pastikan rangkaian dalam kondisi mati (tidak ada arus), lalu hubungkan probe ke kedua ujung resistor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Multimeter - Tahap 3: Pembacaan Hasil (id_pand_penggunaan = 6)
            [
                'id_pand_penggunaan' => 6,
                'deskripsi_penggunaan' => 'Baca nilai yang ditampilkan pada display digital. Perhatikan satuan yang tertera (V, mV, A, mA, Ω, kΩ, MΩ).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 6,
                'deskripsi_penggunaan' => 'Jika display menunjukkan OL (overload), berarti range terlalu kecil. Naikkan range pengukuran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 6,
                'deskripsi_penggunaan' => 'Catat hasil pengukuran dan matikan multimeter setelah selesai untuk menghemat baterai.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Function Generator - Tahap 1: Inisialisasi Sistem (id_pand_penggunaan = 7)
            [
                'id_pand_penggunaan' => 7,
                'deskripsi_penggunaan' => 'Hubungkan function generator ke sumber listrik dan nyalakan alat dengan menekan tombol power.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 7,
                'deskripsi_penggunaan' => 'Tunggu hingga display menunjukkan parameter default dan sistem siap digunakan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 7,
                'deskripsi_penggunaan' => 'Periksa kondisi kabel output BNC dan pastikan dalam keadaan baik tanpa kerusakan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Function Generator - Tahap 2: Konfigurasi Sinyal (id_pand_penggunaan = 8)
            [
                'id_pand_penggunaan' => 8,
                'deskripsi_penggunaan' => 'Pilih bentuk gelombang yang diinginkan (sine, square, triangle, atau sawtooth) menggunakan tombol waveform selector.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 8,
                'deskripsi_penggunaan' => 'Atur frekuensi output menggunakan frequency control. Gunakan tombol range untuk memilih satuan (Hz, kHz, MHz).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 8,
                'deskripsi_penggunaan' => 'Sesuaikan amplitudo atau tegangan output menggunakan amplitude control sesuai kebutuhan eksperimen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Function Generator - Tahap 3: Output dan Verifikasi (id_pand_penggunaan = 9)
            [
                'id_pand_penggunaan' => 9,
                'deskripsi_penggunaan' => 'Hubungkan kabel BNC dari output terminal function generator ke rangkaian atau osiloskop untuk verifikasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 9,
                'deskripsi_penggunaan' => 'Tekan tombol output ON untuk mengaktifkan sinyal. Pastikan LED indikator output menyala.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 9,
                'deskripsi_penggunaan' => 'Verifikasi sinyal output menggunakan osiloskop untuk memastikan frekuensi, amplitudo, dan bentuk gelombang sesuai yang diinginkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Power Supply - Tahap 1: Setup Awal (id_pand_penggunaan = 10)
            [
                'id_pand_penggunaan' => 10,
                'deskripsi_penggunaan' => 'Hubungkan power supply ke sumber listrik AC dan nyalakan dengan menekan tombol power.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 10,
                'deskripsi_penggunaan' => 'Pastikan voltage dan current display menyala dan menunjukkan nilai 0 atau nilai default.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 10,
                'deskripsi_penggunaan' => 'Periksa kondisi output terminal dan pastikan tidak ada hubung singkat sebelum menyalakan output.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Power Supply - Tahap 2: Pengaturan Parameter (id_pand_penggunaan = 11)
            [
                'id_pand_penggunaan' => 11,
                'deskripsi_penggunaan' => 'Putar knob voltage adjustment untuk mengatur tegangan output sesuai kebutuhan rangkaian (misal 5V, 12V, dll).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 11,
                'deskripsi_penggunaan' => 'Atur current limit menggunakan knob current adjustment untuk membatasi arus maksimum yang boleh mengalir, melindungi rangkaian dari kerusakan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 11,
                'deskripsi_penggunaan' => 'Hubungkan kabel dari terminal output positif dan negatif ke rangkaian yang akan diberi daya. Pastikan polaritas benar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Power Supply - Tahap 3: Aktivasi dan Monitoring (id_pand_penggunaan = 12)
            [
                'id_pand_penggunaan' => 12,
                'deskripsi_penggunaan' => 'Tekan tombol output ON untuk mengaktifkan tegangan output ke rangkaian. LED indikator akan menyala.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 12,
                'deskripsi_penggunaan' => 'Monitor tegangan dan arus yang ditampilkan pada display. Pastikan arus tidak melebihi batas yang telah ditentukan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 12,
                'deskripsi_penggunaan' => 'Jika selesai menggunakan, matikan output terlebih dahulu, lalu matikan power supply dan lepaskan kabel dari rangkaian.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Breadboard - Tahap 1: Persiapan Breadboard (id_pand_penggunaan = 13)
            [
                'id_pand_penggunaan' => 13,
                'deskripsi_penggunaan' => 'Letakkan breadboard di permukaan datar dan stabil. Pastikan breadboard bersih dari komponen sebelumnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 13,
                'deskripsi_penggunaan' => 'Identifikasi power rail (jalur merah untuk VCC/positif dan biru/hitam untuk ground) yang terletak di sisi kiri dan kanan breadboard.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 13,
                'deskripsi_penggunaan' => 'Siapkan komponen-komponen yang akan digunakan seperti resistor, LED, kapasitor, IC, dan kabel jumper.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Breadboard - Tahap 2: Perakitan Rangkaian (id_pand_penggunaan = 14)
            [
                'id_pand_penggunaan' => 14,
                'deskripsi_penggunaan' => 'Hubungkan power rail dengan sumber tegangan (power supply atau baterai). Pastikan polaritas benar: positif ke rail merah, negatif ke rail hitam.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 14,
                'deskripsi_penggunaan' => 'Pasang komponen-komponen sesuai skema rangkaian. Masukkan kaki komponen ke lubang breadboard dengan hati-hati, jangan memaksakan agar tidak bengkok.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 14,
                'deskripsi_penggunaan' => 'Hubungkan antar komponen menggunakan kabel jumper. Perhatikan koneksi internal breadboard: lubang dalam satu baris (a-e atau f-j) terhubung secara horizontal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Detail untuk Breadboard - Tahap 3: Testing dan Troubleshooting (id_pand_penggunaan = 15)
            [
                'id_pand_penggunaan' => 15,
                'deskripsi_penggunaan' => 'Periksa kembali semua koneksi sebelum menghidupkan rangkaian. Pastikan tidak ada hubung singkat antara VCC dan ground.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 15,
                'deskripsi_penggunaan' => 'Nyalakan sumber tegangan dan amati rangkaian. Gunakan multimeter untuk mengukur tegangan di berbagai titik untuk memastikan distribusi tegangan benar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pand_penggunaan' => 15,
                'deskripsi_penggunaan' => 'Jika rangkaian tidak bekerja, matikan sumber tegangan terlebih dahulu. Periksa koneksi yang longgar, komponen terbalik, atau kesalahan pemasangan lainnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
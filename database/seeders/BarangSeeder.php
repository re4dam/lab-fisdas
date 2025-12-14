<?php

namespace Database\Seeders;
// BarangSeeder.php
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
        DB::table('barang')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Osiloskop Digital',
                'gambar' => 'osiloskop.jpg',
                'deskripsi' => 'Osiloskop digital untuk mengamati dan menganalisis sinyal listrik dalam bentuk gelombang. Dilengkapi dengan layar LCD dan kemampuan penyimpanan data.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Multimeter Digital',
                'gambar' => 'multimeter.jpg',
                'deskripsi' => 'Alat ukur elektronik serbaguna untuk mengukur tegangan (voltage), arus (current), dan hambatan (resistance) dalam rangkaian listrik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 3,
                'nama_barang' => 'Function Generator',
                'gambar' => 'function_generator.jpg',
                'deskripsi' => 'Generator sinyal elektronik yang dapat menghasilkan berbagai bentuk gelombang seperti sinusoidal, segitiga, dan kotak dengan frekuensi yang dapat diatur.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 4,
                'nama_barang' => 'Power Supply DC',
                'gambar' => 'power_supply.jpg',
                'deskripsi' => 'Catu daya DC yang dapat diatur tegangannya, digunakan untuk memberikan sumber tegangan stabil pada rangkaian elektronik dalam eksperimen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 5,
                'nama_barang' => 'Breadboard Kit',
                'gambar' => 'breadboard.jpg',
                'deskripsi' => 'Papan percobaan elektronik untuk membuat prototype rangkaian tanpa solder, dilengkapi dengan kabel jumper dan komponen elektronik dasar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
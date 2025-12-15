<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data barang dari database beserta atributnya
        // Tidak meload tabel lain seperti komponen atau panduan
        $barang = Barang::all();

        return view('barang.index', compact('barang'));
    }

    public function show($id)
    {
        // Mengambil barang beserta tabel terkaitnya
        // Disini yaitu komponen, panduan keselamatan, dan panduan penggunaan
        $barang = Barang::with(['komponen', 'panduanKeselamatan', 'panduanPenggunaan'])->findOrFail($id);
        // findOrFail akan mengembalikan 404 jika data tidak ditemukan

        // mengembalikan dalam bentuk JSON
        return $barang;

        // adapun bentuk dump or die
        // dd($barang->toArray());

        // Tampilkan detail barang pada view
        // return view('barang.show', compact('barang'));
    }
}

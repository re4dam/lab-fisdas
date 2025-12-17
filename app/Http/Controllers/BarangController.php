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

        return view('home', compact('barang'));
    }

    public function show($id)
    {
        // Mengambil barang beserta tabel terkaitnya
        // Disini yaitu komponen, panduan keselamatan, dan panduan penggunaan
        // $barang = Barang::with(['komponen', 'panduanKeselamatan', 'panduanPenggunaan'])->findOrFail($id);
        $barang = Barang::with(['komponen'])->findOrFail($id);
        // findOrFail akan mengembalikan 404 jika data tidak ditemukan

        // mengembalikan dalam bentuk JSON
        // return $barang;

        // adapun bentuk dump or die
        // dd($barang->toArray());

        // Tampilkan detail barang pada view
        return view('barang.detail', compact('barang'));
    }

    public function panduanKeselamatan($id)
    {
        $barang = Barang::with('panduanKeselamatan')->findOrFail($id);

        return view('barang.panduankeselamatan', compact('barang'));
    }

    public function panduanPenggunaan($id)
    {
        $barang = Barang::with('panduanPenggunaan')->findOrFail($id);

        return view('barang.panduan', compact('barang'));
    }
}

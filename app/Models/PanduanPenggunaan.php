<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanduanPenggunaan extends Model
{
    use HasFactory;

    protected $table = 'panduan_penggunaan'; // define table name
    protected $primaryKey = 'id_pand_penggunaan'; // define table primary key

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }

    public function penggunaanDetail()
    {
        return $this->hasMany(PenggunaanDetail::class, 'id_pand_penggunaan', 'id_pand_penggunaan');
    }
}

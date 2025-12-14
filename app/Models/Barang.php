<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    use HasFactory;

    protected $table = 'barang'; // define table name
    protected $primaryKey = 'id_barang'; // define table primary key

    public function komponen()
    {
        return $this->hasMany(Komponen::class, 'id_barang', 'id_barang');
    }

    public function panduanPenggunaan()
    {
        return $this->hasMany(PanduanPenggunaan::class, 'id_barang', 'id_barang');
    }

    public function panduanKeselamatan()
    {
        return $this->hasMany(PanduanKeselamatan::class, 'id_barang', 'id_barang');
    }
}

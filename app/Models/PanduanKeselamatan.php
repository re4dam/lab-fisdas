<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanduanKeselamatan extends Model
{
    use HasFactory;

    protected $table = 'panduan_keselamatan'; // define table name
    protected $primaryKey = 'id_pand_keselamatan'; // define table primary key

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}

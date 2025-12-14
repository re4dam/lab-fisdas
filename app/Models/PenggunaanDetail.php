<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PenggunaanDetail extends Model
{
    protected $table = 'penggunaan_detail'; // define table name
    protected $primaryKey = 'id_penggunaan_detail'; // define table primary key

    public function panduanPenggunaan()
    {
        return $this->belongsTo(PanduanPenggunaan::class, 'id_pand_penggunaan', 'id_pand_penggunaan');
    }
}

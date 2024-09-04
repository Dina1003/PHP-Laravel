<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Transaksi extends Model
{
    protected $tabel = 'transaksis';

    protected $fillable = ['kode_transaksi', 'id_cafe', 'tanggal', 'total_transaksi',
    ];

    public function detail_transaksi()
   {
       return $this->hasMany(Detail_Transaksi::class);
   }
     
}

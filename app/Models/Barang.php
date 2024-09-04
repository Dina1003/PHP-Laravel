<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $tabel = 'barangs';

    protected $fillable= ['kode_barang', 'nama_barang', 'jumlah_barang', 'harga_barang'];

}

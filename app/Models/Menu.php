<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $tabel = 'menus';

    protected $fillable = ['kode_menu' , 'nama_menu', 'harga'];

    public function Detail_Transaksi()
    {
        return $this->hasMany(Detail_Transaksi::class);
    }
}

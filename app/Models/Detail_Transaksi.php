<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi extends Model
{
    protected $table = 'detail__transaksis';
    protected $guarded = [
        
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}

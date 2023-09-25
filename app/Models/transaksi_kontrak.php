<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi_kontrak extends Model
{
    public function pembayaran()
    {
        return $this->hasOne(pembayaran::class);
    }

    use HasFactory;
}

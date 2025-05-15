<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_id',
        'status',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'nama_penerima',
        'nomor_resi',
        'ekspedisi',
        'tanggal_pemesanan',
        'e_commerce',
        'berat_barang',
        'status',
        'user_id',
    ];
    
    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
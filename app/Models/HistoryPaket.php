<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPaket extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paket',
        'tanggal_paket_diterima',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }

}
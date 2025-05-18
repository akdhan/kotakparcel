<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\HistoryPaket;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
{
    $nama = Auth::user()->name;
    $pakets = Paket::where('user_id', Auth::id())->get();
    $paketsAktif = Paket::where('status', '!=', 'diterima')->get();
    $paketsSelesai = Paket::where('status', 'diterima')->get();

    return view('index_transaksi', compact(
            'pakets', 'paketsAktif', 'paketsSelesai'
        ));
}

}

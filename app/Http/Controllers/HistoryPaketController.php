<?php

namespace App\Http\Controllers;

use App\Models\HistoryPaket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryPaketController extends Controller
{
    // Menampilkan daftar history paket
    public function index()
    {
        $nama = Auth::user()->name;
        $historyPakets = HistoryPaket::latest()->get(); 
        return view('index_history', compact('historyPakets')); 
    }

    // Menampilkan detail history paket jika dibutuhkan
    public function show($id)
    {
        $history = HistoryPaket::findOrFail($id);
        return view('history_show', compact('history'));
    }

    // Jika kamu ingin menambahkan fitur pencarian, bisa ditambahkan method search atau filter
}

<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\HistoryPaket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    // Menampilkan daftar paket
    public function index()
{
    $pakets = Paket::all();
    $jumlahPaket = Paket::where('status', '!=', 'diterima')->count();
    $jumlahHistory = Paket::where('status', 'diterima')->count();
    $totalTransaksi = Paket::count();
    $paketsAktif = Paket::where('status', '!=', 'diterima')->get();
    $paketsSelesai = Paket::where('status', 'diterima')->get();

    return view('pakets.index', compact('pakets', 'jumlahPaket', 'jumlahHistory', 'totalTransaksi', 'paketsAktif', 'paketsSelesai'));
}


    // Menampilkan form untuk membuat paket baru
    public function create()
    {
        return view('pakets.create');
    }

    // Menampilkan detail paket
    public function show($id)
    {
        $paket = Paket::findOrFail($id);
        return view('pakets.show', compact('paket'));
    }

    // Menyimpan paket baru dengan status default "dikirim"
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'nama_penerima' => 'required|string|max:255',
            'nomor_resi' => 'required|string',
            'ekspedisi' => 'required|in:JNE,JNT,TIKI,POS,SHOPEE,GRAB',
            'tanggal_pemesanan' => 'required|date',
            'e_commerce' => 'required|string',
            'berat_barang' => 'required|numeric',
        ]);

        Paket::create(array_merge(
            $request->only([
                'nama_barang',
                'nama_penerima',
                'nomor_resi',
                'ekspedisi',
                'tanggal_pemesanan',
                'e_commerce',
                'berat_barang'
            ]),
            ['status' => 'dikirim']
        ));

        return redirect()->route('pakets.index')->with('success', 'Paket berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit paket
    public function edit($id)
    {
        $paket = Paket::findOrFail($id);
        return view('pakets.edit', compact('paket'));
    }

    // Mengupdate data paket, pindahkan ke history jika status diubah jadi "diterima"
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'nama_penerima' => 'required|string|max:255',
            'nomor_resi' => 'required|string',
            'ekspedisi' => 'required|in:JNE,JNT,TIKI,POS,SHOPEE,GRAB',
            'tanggal_pemesanan' => 'required|date',
            'e_commerce' => 'required|string',
            'berat_barang' => 'required|numeric',
            'status' => 'required|in:dikirim,diterima',
        ]);

        $paket = Paket::findOrFail($id);

        // Jika status diubah jadi diterima, pindahkan ke history
        if ($request->status === 'diterima') {
            HistoryPaket::create([
                'nama_barang' => $request->nama_barang,
                'nama_penerima' => $request->nama_penerima,
                'nomor_resi' => $request->nomor_resi,
                'ekspedisi' => $request->ekspedisi,
                'tanggal_pemesanan' => $request->tanggal_pemesanan,
                'e_commerce' => $request->e_commerce,
                'berat_barang' => $request->berat_barang,
                'status' => 'diterima'
            ]);

            $paket->delete();

            return redirect()->route('pakets.index')->with('success', 'Paket berhasil dipindahkan ke history.');
        } else {
            $paket->update($request->all());
            return redirect()->route('pakets.index')->with('success', 'Paket berhasil diperbarui.');
        }
    }

    // Menghapus paket dan memindahkan ke history
    public function destroy($id)
    {
        $paket = Paket::findOrFail($id);

        HistoryPaket::create([
            'nama_barang' => $paket->nama_barang,
            'nama_penerima' => $paket->nama_penerima,
            'nomor_resi' => $paket->nomor_resi,
            'ekspedisi' => $paket->ekspedisi,
            'tanggal_pemesanan' => $paket->tanggal_pemesanan,
            'e_commerce' => $paket->e_commerce,
            'berat_barang' => $paket->berat_barang,
            'status' => 'diterima' // Saat dihapus, anggap sudah diterima
        ]);

        $paket->delete();

        return redirect()->route('pakets.index')->with('success', 'Paket berhasil dihapus dan dipindahkan ke history.');
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Events\BoxOpened;
use App\Models\Notification;
use App\Models\Paket;
use Illuminate\Support\Facades\Auth;

class BlynkController extends Controller
{
    protected $token = 'NDuPUR3zgrbK_hso1TfFbFiVNk2cewsd';

    // GET: Menampilkan dashboard
    public function index()
    {
        // Ambil nilai dari semua pin
        $sistem     = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&vpin=V1")->body();
        $solenoid   = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&V2")->body();
        $qr         = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&V3")->body();
        $buzzer     = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&vpin=V4")->body();

        $notifications = Notification::whereDate('created_at', Carbon::today())->get();
        
        $nama = Auth::user()->name;
        $pakets = Paket::all();

        // Hitung total jumlah paket
        $jumlahPaket = Paket::where('status', '!=', 'diterima')->count();
        $jumlahHistory = Paket::where('status', 'diterima')->count();
        $totalTransaksi = Paket::count();

        // Data Month - 6 bulan terakhir
        $monthLabels = [];
        $monthPaket = [];
        $monthHistory = [];
        for ($i = 5; $i >= 0; $i--) {
            $startOfMonth = Carbon::now()->subMonths($i)->startOfMonth();
            $endOfMonth = Carbon::now()->subMonths($i)->endOfMonth();
            $label = $startOfMonth->format('M Y');

            $monthLabels[] = $label;
            $monthPaket[] = Paket::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
            $monthHistory[] = Paket::whereBetween('created_at', [$startOfMonth, $endOfMonth])
                                    ->where('status', 'diterima')
                                    ->count();
        }
        return view('blynk', compact('sistem', 'qr', 'solenoid', 'buzzer', 'notifications', 'pakets', 
        'jumlahPaket', 'jumlahHistory', 'totalTransaksi',
            'monthLabels', 'monthPaket', 'monthHistory'));
    }

    // POST: Mengubah nilai pin
    public function update(Request $request)
    {
    $pin = strtolower($request->pin); // Wajib huruf kecil untuk Blynk
    $value = $request->value;

    $response = Http::get("https://blynk.cloud/external/api/update?token={$this->token}&{$pin}={$value}");

    if ($response->successful()) {
        return response()->json(['status' => 'success']);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => $response->body()
        ], 500);
    }
    }

    public function webhookTrigger(Request $request)
    {
    // Logika pengecekan status (bisa dari request atau Blynk API)
    $status = $request->input('status'); // misal status dikirim dari ESP32

    if ($status == 'open') {
        // Simpan ke database
        Notification::create([
            'title' => 'Kotak Dibuka',
            'message' => 'Kotak logistik berhasil dibuka.',
        ]);

        // Broadcast event
        event(new BoxOpened('Kotak Dibuka', 'Kotak logistik berhasil dibuka.'));
    }

    return response()->json(['success' => true]);
    }
    
}

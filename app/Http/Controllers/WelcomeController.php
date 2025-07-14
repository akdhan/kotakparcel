<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\HistoryPaket;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Notification;

class WelcomeController extends Controller
{
    protected $token = 'NDuPUR3zgrbK_hso1TfFbFiVNk2cewsd';

    public function index()
    {
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
        $solenoid = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&vpin=V2")->body();
        $notifications = Notification::whereDate('created_at', Carbon::today())->get();

        return view('welcome', compact(
            'pakets', 'jumlahPaket', 'jumlahHistory', 'totalTransaksi',
            'monthLabels', 'monthPaket', 'monthHistory', 'solenoid', 'notifications'
        ));
    }
}

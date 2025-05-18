<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlynkController extends Controller
{
    protected $token = 'NDuPUR3zgrbK_hso1TfFbFiVNk2cewsd';

    // GET: Menampilkan dashboard
    public function index()
    {
        // Ambil nilai dari semua pin
        $sistem     = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&vpin=V1")->body();
        $solenoid   = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&vpin=V2")->body();
        $qr         = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&vpin=V3")->body();
        $buzzer     = Http::get("https://blynk.cloud/external/api/get?token={$this->token}&vpin=V4")->body();

        return view('blynk', compact('sistem', 'solenoid', 'qr', 'buzzer'));
    }

    // POST: Mengubah nilai pin
    public function update(Request $request)
    {
        $pin = $request->pin; 
        $value = $request->value;

        $response = Http::get("https://blynk.cloud/external/api/update?token={$this->token}&vpin={$pin}&value={$value}");

        if ($response->successful()) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error'], 500);
        }
    }
}

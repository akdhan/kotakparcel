<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'message' => 'required',
            'is_read' => 'required',
        ]);
        $notifikasi = new Notification($request->all());
        $notifikasi->save();
        
        return response()->json(['status' => 'success', 'data' => $notifikasi]);
    }

}

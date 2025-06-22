<?php
use App\Http\Controllers\PaketController;
use App\Http\Controllers\HistoryPaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlynkController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {return view('welcome');});
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

    Route::get('/pakets', [PaketController::class, 'index'])->name('pakets.index');
    Route::get('/pakets/create', [PaketController::class, 'create'])->name('pakets.create');
    Route::get('/pakets/{paket}', [PaketController::class, 'show'])->name('pakets.show');
    Route::get('/pakets/{paket}/edit', [PaketController::class, 'edit'])->name('pakets.edit');
    Route::resource('pakets', PaketController::class);
    Route::put('/pakets/{paket}/selesai', [PaketController::class, 'selesaikan'])->name('pakets.selesai');
    Route::post('/cek-resi', [PaketController::class, 'cekResi']);


    Route::get('/history', [HistoryPaketController::class, 'index'])->name('index_history');

    Route::get('/transaksis', [TransaksiController::class, 'index'])->name('index_transaksi');

    Route::get('/blynk', [BlynkController::class, 'index']);
    Route::post('/blynk/update', [BlynkController::class, 'update']);
    Route::post('/webhook-blynk', [BlynkController::class, 'webhookTrigger']);

});
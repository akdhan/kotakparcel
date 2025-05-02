<?php
use App\Http\Controllers\PaketController;
use App\Http\Controllers\HistoryPaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/pakets', [PaketController::class, 'index'])->name('pakets.index');
Route::get('/pakets/create', [PaketController::class, 'create'])->name('pakets.create');
Route::get('/pakets/{paket}', [PaketController::class, 'show'])->name('pakets.show');
Route::get('/pakets/{paket}/edit', [PaketController::class, 'edit'])->name('pakets.edit');
Route::resource('pakets', PaketController::class);

Route::get('/history', [HistoryPaketController::class, 'index'])->name('index_history');

Route::get('/transaksis', [TransaksiController::class, 'index'])->name('index_transaksi');

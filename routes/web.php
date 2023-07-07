<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('/auth.login');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Routes for Authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Sales Routes
    Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
    Route::get('/sales/create', [SalesController::class, 'create'])->name('sales.create');
    Route::post('/sales', [SalesController::class, 'store'])->name('sales.store');
    Route::get('/sales/{sale}', [SalesController::class, 'show'])->name('sales.show');
    Route::get('/sales/{sale}/edit', [SalesController::class, 'edit'])->name('sales.edit');
    Route::put('/sales/{sale}', [SalesController::class, 'update'])->name('sales.update');
    Route::delete('/sales/{sale}', [SalesController::class, 'destroy'])->name('sales.destroy');

    // Barang Routes
    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/barang/{barang}', [BarangController::class, 'show'])->name('barang.show');
    Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/barang/{barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');

    // Gudang Routes
    Route::get('/gudang', [GudangController::class, 'index'])->name('gudang.index');
    Route::get('/gudang/create', [GudangController::class, 'create'])->name('gudang.create');
    Route::post('/gudang', [GudangController::class, 'store'])->name('gudang.store');
    Route::get('/gudang/{gudang}', [GudangController::class, 'show'])->name('gudang.show');
    Route::get('/gudang/{gudang}/edit', [GudangController::class, 'edit'])->name('gudang.edit');
    Route::put('/gudang/{gudang}', [GudangController::class, 'update'])->name('gudang.update');
    Route::delete('/gudang/{gudang}', [GudangController::class, 'destroy'])->name('gudang.destroy');

    // Stock Routes
    Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
    Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
    Route::post('/stock', [StockController::class, 'store'])->name('stock.store');

    // ...
});

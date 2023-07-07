<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;

// Authentication Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Authenticated Routes
Route::middleware('auth:sanctum')->group(function () {

    // Submit Input Stock barang (berdasarkan login sales)
    Route::post('/stocks', [StockController::class, 'store']);

    // Get List Data Barang
    Route::get('/barangs', [BarangController::class, 'getBarangs']);

    // Get List Data Gudang
    Route::get('/gudangs', [GudangController::class, 'getGudangs']);
});

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BarangController;
// use App\Http\Controllers\GudangController;
// use App\Http\Controllers\StockController;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\InventoryController;


// // Authentication Routes
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);

// // Authenticated Routes
// Route::middleware('auth:sanctum')->group(function () {
//     // Inventory Routes
//     Route::prefix('inventory')->group(function () {
//         Route::get('/data-master', [InventoryController::class, 'getDataMaster'])->name('inventory.data-master');
//         Route::post('/input-stock', [InventoryController::class, 'inputStock'])->name('inventory.input-stock');
//         Route::get('/transaksi', [InventoryController::class, 'getTransaksi'])->name('inventory.transaksi');
//     });
// });

// // Authenticated Routes
// Route::middleware('auth:sanctum')->group(function () {
//     // Inventory Routes
//     Route::prefix('inventory')->group(function () {
//         Route::get('/data-master', [InventoryController::class, 'getDataMaster'])->name('inventory.data-master');
//         Route::post('/input-stock', [InventoryController::class, 'inputStock'])->name('inventory.input-stock');
//         Route::get('/transaksi', [InventoryController::class, 'getTransaksi'])->name('inventory.transaksi');
//     });
// });

// // Barang Routes
// Route::prefix('barangs')->group(function () {
//     Route::get('/', [BarangController::class, 'index'])->name('barangs.index');
//     Route::post('/', [BarangController::class, 'store'])->name('barangs.store');
//     Route::get('/{barang}', [BarangController::class, 'show'])->name('barangs.show');
//     Route::put('/{barang}', [BarangController::class, 'update'])->name('barangs.update');
//     Route::delete('/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');
// });

// // Gudang Routes
// Route::prefix('gudangs')->group(function () {
//     Route::get('/', [GudangController::class, 'index'])->name('gudangs.index');
//     Route::post('/', [GudangController::class, 'store'])->name('gudangs.store');
//     Route::get('/{gudang}', [GudangController::class, 'show'])->name('gudangs.show');
//     Route::put('/{gudang}', [GudangController::class, 'update'])->name('gudangs.update');
//     Route::delete('/{gudang}', [GudangController::class, 'destroy'])->name('gudangs.destroy');
// });

// // Stock Routes
// Route::prefix('stocks')->group(function () {
//     Route::get('/', [StockController::class, 'index'])->name('stocks.index');
//     Route::post('/', [StockController::class, 'store'])->name('stocks.store');
//     Route::get('/{stock}', [StockController::class, 'show'])->name('stocks.show');
//     Route::put('/{stock}', [StockController::class, 'update'])->name('stocks.update');
//     Route::delete('/{stock}', [StockController::class, 'destroy'])->name('stocks.destroy');
// });
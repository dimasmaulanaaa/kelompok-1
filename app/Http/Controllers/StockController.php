<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Sales;
use App\Models\Gudang;
use App\Models\Barang;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::with(['sales', 'barang', 'gudang'])->get();
        return view('stock.index', compact('stocks'));
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        $stock = Stock::updateOrCreate([
            'sales_id' => $requestData['sales_id'],
            'barang_id' => $requestData['barang_id'],
            'gudang_id' => $requestData['gudang_id'],
        ], [
            'jumlah_stok' => $requestData['jumlah_stok'],
            'tanggal_waktu_check_stok' => now(),
        ]);

        return response()->json(['message' => 'Data stock berhasil disimpan'], 201);
    }

    public function getStocks()
    {
        $stocks = Stock::with(['sales', 'barang', 'gudang'])->get();
        return response()->json($stocks);
    }
}

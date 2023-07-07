<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\Stock;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function getBarangs()
    {
        $barangs = Barang::all();

        return response()->json($barangs);
    }

    public function getGudangs()
    {
        $gudangs = Gudang::all();

        return response()->json($gudangs);
    }

    public function inputStock(Request $request)
    {
        $request->validate([
            'nama_sales' => 'required',
            'nama_barang' => 'required',
            'nama_gudang' => 'required',
            'jumlah_stok' => 'required|numeric',
            'tanggal_waktu_check_stok' => 'required|date',
        ]);

        $stock = Stock::create($request->all());

        return response()->json($stock, 201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Barang;
use App\Models\Sales;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGudang = Gudang::count();
        $totalBarang = Barang::count();
        $totalSales = Sales::count();

        return view('dashboard', compact('totalGudang', 'totalBarang', 'totalSales'));
    }
}

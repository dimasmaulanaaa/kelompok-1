<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hapus semua data gudangs
        Stock::query()->delete();
        // Mendapatkan semua Sales, Barang, dan Gudang yang ada
        $barangs = \App\Models\Barang::all();
        $gudangs = \App\Models\Gudang::all();
        $sales = \App\Models\Sales::all();

        // Generate data stock dengan kombinasi random Sales, Barang, dan Gudang
        for ($i = 1; $i <= 10; $i++) {
            $salesId = $sales->random()->id;
            $barangId = $barangs->random()->id;
            $gudangId = $gudangs->random()->id;

            Stock::create([
                'sales_id' => $salesId,
                'barang_id' => $barangId,
                'gudang_id' => $gudangId,
                'jumlah_stok' => rand(1, 100),
                'tanggal_waktu_check_stok' => now(),
            ]);
        }
    }
}

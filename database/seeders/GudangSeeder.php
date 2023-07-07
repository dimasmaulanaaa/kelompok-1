<?php

namespace Database\Seeders;

use App\Models\Gudang;
use Illuminate\Database\Seeder;

class GudangSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data gudangs
        Gudang::query()->delete();

        // Tambahkan 5 data gudang
        for ($i = 1; $i <= 5; $i++) {
            Gudang::create([
                'nama' => 'Gudang ' . $i,
                'lokasi' => 'Lokasi ' . $i,
            ]);
        }
    }
}

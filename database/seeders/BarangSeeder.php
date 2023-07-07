<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 5 data barang
        for ($i = 1; $i <= 5; $i++) {
            Barang::create([
                'nama' => 'Barang ' . $i,
                // Tambahkan kolom-kolom lain yang diperlukan
            ]);
        }
    }
}

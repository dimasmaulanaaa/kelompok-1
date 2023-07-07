<?php

namespace Database\Seeders;

use App\Models\Sales;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 5 data sales
        for ($i = 1; $i <= 5; $i++) {
            Sales::create([
                'nama' => 'Sales ' . $i,
                'email' => 'sales' . $i . '@example.com',
                'no_handphone' => '0812345678' . $i,
                // Tambahkan kolom-kolom lain yang diperlukan
            ]);
        }
    }
}

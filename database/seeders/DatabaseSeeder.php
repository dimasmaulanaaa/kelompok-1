<?php

use Database\Seeders\BarangSeeder;
use Database\Seeders\GudangSeeder;
use Database\Seeders\SalesSeeder;
use Database\Seeders\StockSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BarangSeeder::class,
            GudangSeeder::class,
            SalesSeeder::class,
            StockSeeder::class,
            // Panggil seeder-seeder lain jika ada
        ]);
    }
}

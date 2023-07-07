<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('gudang_id');
            $table->unsignedInteger('jumlah_stok');
            $table->timestamp('tanggal_waktu_check_stok');
            // Tambahkan kolom lain yang diperlukan untuk Stock
            $table->timestamps();

            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
            $table->foreign('gudang_id')->references('id')->on('gudangs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}

@extends('app')

@section('content')
    <h1>Tambah Stock</h1>

    <form action="{{ route('stock.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_sales" class="form-label">Nama Sales</label>
            <input type="text" name="nama_sales" id="nama_sales" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nama_gudang" class="form-label">Nama Gudang</label>
            <input type="text" name="nama_gudang" id="nama_gudang" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jumlah_stok" class="form-label">Jumlah Stok</label>
            <input type="number" name="jumlah_stok" id="jumlah_stok" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tanggal_waktu_check_stok" class="form-label">Tanggal/Waktu Check Stok</label>
            <input type="datetime-local" name="tanggal_waktu_check_stok" id="tanggal_waktu_check_stok" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

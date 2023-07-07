@extends('app')

@section('content')
    <h1>Tambah Barang</h1>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
        </div>
        <!-- <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control">
        </div> -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

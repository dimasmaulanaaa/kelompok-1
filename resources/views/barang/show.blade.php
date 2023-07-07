@extends('app')

@section('content')
    <h1>Detail Barang</h1>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $barang->nama }}" disabled>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control" value="{{ $barang->harga }}" disabled>
    </div>
@endsection

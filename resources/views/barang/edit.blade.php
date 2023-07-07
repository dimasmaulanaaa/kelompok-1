@extends('app')

@section('content')
    <h1>Edit Barang</h1>

    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $barang->nama }}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" id="harga" class="form-control" value="{{ $barang->harga }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

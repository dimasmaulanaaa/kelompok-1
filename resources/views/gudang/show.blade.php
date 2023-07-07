@extends('app')

@section('content')
    <h1>Detail Gudang</h1>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $gudang->nama }}" disabled>
    </div>
    <div class="mb-3">
        <label for="lokasi" class="form-label">Lokasi</label>
        <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $gudang->lokasi }}" disabled>
    </div>
@endsection

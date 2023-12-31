@extends('app')

@section('content')
<h1>Barang</h1>

<a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

<table class="table">
    <thead>
        <tr>
        <th>Nama</th>
        <!-- <th>Deskripsi</th>
        <th>Stok</th> -->
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->nama }}</td>
                <!-- <td>{{ $barang->deskripsi }}</td>
                <td>{{ $barang->stok }}</td> -->
                <td>
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

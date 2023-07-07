@extends('app')

@section('content')
    <h1>Gudang</h1>

    <a href="{{ route('gudang.create') }}" class="btn btn-primary mb-3">Tambah Gudang</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gudangs as $gudang)
                <tr>
                    <td>{{ $gudang->id }}</td>
                    <td>{{ $gudang->nama }}</td>
                    <td>{{ $gudang->lokasi }}</td>
                    <td>
                        <a href="{{ route('gudang.edit', $gudang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('gudang.destroy', $gudang->id) }}" method="POST" style="display:inline">
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

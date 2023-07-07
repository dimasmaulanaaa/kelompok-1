@extends('app')

@section('content')
    <h1>Sales</h1>

    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Tambah Sales</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->nama }}</td>
                    <td>{{ $sale->email }}</td>
                    <td>
                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline">
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

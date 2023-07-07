@extends('app')

@section('content')
    <h1>Edit Sales</h1>

    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $sale->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $sale->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

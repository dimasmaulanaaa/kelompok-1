@extends('app')

@section('content')
    <h1>Detail Sales</h1>

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $sale->name }}" disabled>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $sale->email }}" disabled>
    </div>
@endsection

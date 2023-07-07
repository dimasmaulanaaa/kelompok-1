@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Gudang</h5>
                    <h3 class="card-text">{{ $totalGudang }}</h3>
                    <a href="{{ route('gudang.index') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Barang</h5>
                    <h3 class="card-text">{{ $totalBarang }}</h3>
                    <a href="{{ route('barang.index') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Sales</h5>
                    <h3 class="card-text">{{ $totalSales }}</h3>
                    <a href="{{ route('sales.index') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

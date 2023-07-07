@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Daftar Stock</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Sales</th>
                        <th>Nama Barang</th>
                        <th>Nama Gudang</th>
                        <th>Jumlah Stok</th>
                        <th>Tanggal & Waktu Check Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($stocks as $stock)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $stock->sales->nama }}</td>
                        <td>{{ $stock->barang->nama }}</td>
                        <td>{{ $stock->gudang->nama }}</td>
                        <td>{{ $stock->jumlah_stok }}</td>
                        <td>{{ $stock->tanggal_waktu_check_stok }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
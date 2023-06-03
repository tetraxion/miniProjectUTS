@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Detail Barang</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Kode Barang:</strong> {{ $barang->kode_barang }}</p>
                    <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
                    <p><strong>Harga Barang:</strong> {{ $barang->harga_barang }}</p>
                    <p><strong>Deskripsi Barang:</strong> {{ $barang->deskripsi_barang }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Satuan:</strong> {{ $barang->satuan->nama_satuan }}</p>
                </div>
            </div>
            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark"><i class="bi-arrow-left-circle me-2"></i>Back</a>
        </div>
    </div>
</div>

@endsection

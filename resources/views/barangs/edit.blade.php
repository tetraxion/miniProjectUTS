@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Edit Barang</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" id="kode_barang" value="{{ $barang->kode_barang }}" readonly>
                        </div> 
                        {{-- kode yang bisa diedit
                        {{-- <div class="mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" id="kode_barang" value="{{ $barang->kode_barang }}">
                            @error('kode_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}">
                            @error('nama_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input type="text" class="form-control @error('harga_barang') is-invalid @enderror" name="harga_barang" id="harga_barang" value="{{ $barang->harga_barang }}">
                            @error('harga_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <textarea class="form-control @error('deskripsi_barang') is-invalid @enderror" name="deskripsi_barang" id="deskripsi_barang" rows="3">{{ $barang->deskripsi_barang }}</textarea>
                            @error('deskripsi_barang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="satuan_id" class="form-label">Satuan Barang</label>
                            <select class="form-select @error('satuan_id') is-invalid @enderror" name="satuan_id" id="satuan_id">
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ $barang->satuan_id == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->nama_satuan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('satuan_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi-check-circle me-2"></i>Update</button>
                <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark"><i class="bi-arrow-left-circle me-2"></i>Back</a>
            </form>
        </div>
    </div>
</div>

@endsection

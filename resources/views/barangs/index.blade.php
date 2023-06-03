@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-3 ms-3 col-xl-2">
            <div class="d-grid gap-3">
                <a href="{{ route('barangs.create') }}" class="btn btn-outline-primary">Create Barang</a>
            </div>
        </div>
    </div>

    <div class="table-responsive p-3 rounded-3">
        <table class="table table-bordered table-primary table-hover table-striped mb-0 bg-white">
            <thead >
                <tr class=" text-center">
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th class='pe-4'>Harga Barang</th>
                    <th>Deskripsi Barang</th>
                    <th>Satuan Barang</th>
                    <th>Aksi</th>

                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                    @foreach ($barangs as $barang)
                        <tr>
                            <td class=" text-center">{{ $no++ }}</td>
                            <td class=" text-center">{{ $barang->kode_barang }}</td>
                            <td class=" text-center">{{ $barang->nama_barang }}</td>
                            <td class=" text-center">Rp. {{ $barang->harga_barang }}</td>
                            <td>{{ $barang->deskripsi_barang }}</td>
                            <td class=" text-center">{{ $barang->satuan->nama_satuan }}</td>
                            <td>
                            {{-- ACTIONS SECTION --}}
                            @include('barangs.actions')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

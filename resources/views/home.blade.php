@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h3>Nama : Jana</h3>
                <h3>kelas : XII PPLG B</h3>
                <div class="card">
                    <div class="card-header bg-primary fw-bold text-white">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <a class="btn btn-success mb-2 text-white fw-bold" href={{ url('/barang/tambah') }}><i
                                class="bi bi-plus-lg"></i> Tambah Data</a>
                        <div class="responsive-table shadow">
                            <table class="table table-hover table-bordered">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th>No Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Deskripsi Barang</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $item)
                                        <tr>
                                            <td class="fw-bold text-center">{{ $item->idBarang }}.</td>
                                            <td>{{ $item->namaBarang }}</td>
                                            <td>{{ $item->deskripsiBarang }}</td>
                                            <td>@currency($item->harga)</td>
                                            <td><a class="btn btn-warning fw-semibold"
                                                    href="barang/{{ $item->idBarang }}/edit"><i
                                                        class="bi bi-pencil-square"></i> Edit</a>
                                                <a class="btn btn-danger fw-semibold"
                                                    href="barang/{{ $item->idBarang }}/hapus"><i
                                                        class="bi bi-trash-fill"></i> Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

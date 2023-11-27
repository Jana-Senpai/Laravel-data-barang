@extends('layouts.app')

@section('content')
    <h3>Nama : Jana</h3>
    <h3>Kelas : XII PPLG B</h3>
    

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark shadow">
                <div class="card-header bg-primary text-white">
                    <h4>Form Tambah Data Barang</h4>
                </div>
                <div class="card-body">
                    <form action={{ url('/barang/tambahdata') }} method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="idBarang" class="form-label fw-bold">No Barang :</label>
                            <input type="text" class="form-control" name="idBarang" id="idBarang" placeholder="Nomor Barang">
                        </div>
                        <div class="mb-3">
                            <label for="namaBarang" class="form-label fw-bold">Nama Barang :</label>
                            <input type="text" class="form-control" name="namaBarang" id="namaBarang" placeholder="Nama Barang">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiBarang" class="form-label fw-bold">Deskripsi Barang :</label>
                            <input type="text" class="form-control" name="deskripsiBarang" id="deskripsiBarang" placeholder="Deskripsi Barang">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label fw-bold">Harga :</label>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                        </div>
                
                        <button class="btn btn-primary fw-bold" type="submit">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

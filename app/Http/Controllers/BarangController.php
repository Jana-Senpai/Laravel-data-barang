<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();

        return view('barang.barang', ['barang' => $barang]);
    }

    public function tambah(){
        return view('barang.tambah');
    }

    public function tambahData(Request $request) {
        $validatedData = $request->validate([
            'idBarang' => 'required',
            'namaBarang' => 'required',
            'deskripsiBarang' => 'required',
            'harga' => 'required'
        ]);

        Barang::create($validatedData);

        return redirect()->to('/barang');
    }

    public function edit($id){
        $barang = Barang::findOrFail($id);

        return view('barang.edit', ['barang' => $barang]);
    }

    public function editData($id, Request $request){
        
        $validatedData = $request->validate([
            'idBarang' => 'required',
            'namaBarang' => 'required',
            'deskripsiBarang' => 'required',
            'harga' => 'required'
        ]);

        $barang = Barang::findOrFail($id);
        
        $barang->update([
            'idBarang' => $validatedData['idBarang'],
            'namaBarang' => $validatedData['namaBarang'],
            'deskripsiBarang' => $validatedData['deskripsiBarang'],
            'harga' => $validatedData['harga']
        ]);

        return redirect()->to('/barang');
    }

    public function hapus($id){
        $barang = Barang::findOrFail($id);

        $barang->delete();

        return redirect()->to('/barang');
    }
}


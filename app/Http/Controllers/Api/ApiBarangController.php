<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class ApiBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();

        return response()->json([
            'data' => $barangs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idBarang' => 'required',
            'namaBarang' => 'required',
            'deskripsiBarang' => 'required',
            'harga' => 'required'
        ]);

        $barang = Barang::create($validatedData);

        return response()->json([
            'data' => $barang
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang =  Barang::findOrFail($id);

        return response()->json([
            'data' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'idBarang' => 'required',
            'namaBarang' => 'required',
            'deskripsiBarang' => 'required',
            'harga' => 'required'
        ]);

        $barang = Barang::findOrFail($id);
        
        $newBarang = $barang->update([
            'idBarang' => $validatedData['idBarang'],
            'namaBarang' => $validatedData['namaBarang'],
            'deskripsiBarang' => $validatedData['deskripsiBarang'],
            'harga' => $validatedData['harga']
        ]);

        return response()->json([
            'data' => $newBarang
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete();

        return response()->json([
            "message" => "Barang Berhasil Dihapus"
        ], 204);
    }
}

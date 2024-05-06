<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\m_barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index()
    {
    return m_barang::all();
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'barang_kode' => 'bail|required|string|unique:m_barang,barang_kode',
        //     'barang_nama' => 'required|string|max:100',
        //     'kategori_id' => 'required|integer',
        //     'harga_beli' => 'required|integer',
        //     'harga_jual' => 'required|integer',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);
        // $barang = m_barang::create(
        //     [
        //     'barang_kode' => $request->barang_kode,
        //     'barang_nama' => $request->barang_nama,
        //     'kategori_id' => $request->kategori_id,
        //     'harga_beli' => $request->harga_beli,
        //     'harga_jual' => $request->harga_jual,
        //     'image' => $request->image->hashName(),
        //     ]
        // );
        // return response()->json($barang, 201);
        $barang = m_barang::create($request->all());
        return response()->json($barang, 201);
    }

    public function show(m_barang $barang)
    {
        return $barang;
    }

    public function update(Request $request, m_barang $barang)
    {
        $barang->update($request->all());
        return $barang;
    }

    public function destroy(m_barang $barang)
    {
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus',
        ]);
    }
}

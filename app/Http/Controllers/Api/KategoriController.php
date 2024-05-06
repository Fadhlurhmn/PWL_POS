<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\m_kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return m_kategori::all();
    }

    public function store(Request $request)
    {
        $kategori = m_kategori::create($request->all());
        return response()->json($kategori, 201);
    }

    public function show(m_kategori $kategori)
    {
        return $kategori;
    }

    public function update(Request $request, m_kategori $kategori)
    {
        $kategori->update($request->all());
        return $kategori;
    }

    public function destroy(m_kategori $kategori)
    {
        $kategori->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Terhapus',
        ]);
    }
}

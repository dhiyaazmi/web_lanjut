<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("home");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $arr = ["Alat tulis", "Elektronik", "Sembako"];

        return view("create", compact("arr"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        $arr = [
            ["kode" => "BRG001", "nama" => "Pena", "jenis" => "Alat tulis", "harga" => "20000"],
            ["kode" => "BRG002", "nama" => "Buku", "jenis" => "Alat tulis", "harga" => "15000"]
        ];
        
        return view("show", compact('arr'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}

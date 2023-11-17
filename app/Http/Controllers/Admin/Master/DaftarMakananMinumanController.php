<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDaftarMakananMinumanRequest;
use App\Http\Requests\EditDaftarMakananMinumanRequest;
use App\Models\DaftarMakananMinuman;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DaftarMakananMinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftars = DaftarMakananMinuman::all();
        return view('admin.master.daftar_makanan_minuman.index', ['page_title'=> 'Daftar Makanan Minuman','daftar' => 
        $daftars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master.daftar_makanan_minuman.create', ['page_title' => 'Tambah Daftar Makanan Minuman']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDaftarMakananMinumanRequest $request)
    {
        $makanan = new DaftarMakananMinuman();
        $makanan->fill($request->all());
        $makanan->save();
        return redirect()->route('admin.master.daftar_makanan_minuman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarMakananMinuman $daftarMakananMinuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarMakananMinuman $daftarMakananMinuman)
    {
        return view('admin.master.daftar_makanan_minuman.edit', ['page_title' => 'Edit Makanan Minuman','makanan'=>$daftarMakananMinuman]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditDaftarMakananMinumanRequest $request, DaftarMakananMinuman $daftarMakananMinuman)
    {
        
        $daftarMakananMinuman->fill($request->all());
        $daftarMakananMinuman->save();
        return redirect()->route('admin.master.daftar_makanan_minuman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarMakananMinuman $daftarMakananMinuman)
    {
        $daftarMakananMinuman->delete();
        return redirect()->route('admin.master.daftar_makanan_minuman.index');
    }
}

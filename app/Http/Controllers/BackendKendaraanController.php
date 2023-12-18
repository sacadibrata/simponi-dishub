<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class BackendKendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth()->user();
        $kendaraans = Kendaraan::all();
        $title = 'Hapus Jenis Kendaraan!';
        $text = "Apakah Kamu Ingin Menghapusnya?";
        confirmDelete($title, $text);
        return view('backend.admin.kendaraan.index', compact('kendaraans','users'), ["title" => "Jenis Kendaraan"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth()->user();
        $kendaraans = Kendaraan::all();
        return view('backend.admin.kendaraan.create',  compact('kendaraans','users'), ["title" => "Tambah Jenis Kendaraan"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kendaraan = new Kendaraan();
        $kendaraan->create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = Auth()->user();
        $kendaraan = Kendaraan::findOrFail($id);
        return view('backend.admin.kendaraan.edit', compact('kendaraan','users'), ["title" => "Edit Jenis Kendaraan"]);
    }

    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Berhasil Mengupdate Data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the data barang by ID
        $data = Kendaraan::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('kendaraan.index')->with('success', 'Berhasil Menghapus Data');
    }
}

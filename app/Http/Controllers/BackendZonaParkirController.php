<?php

namespace App\Http\Controllers;

use App\Models\ZonaParkir;
use Illuminate\Http\Request;

class BackendZonaParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth()->user();
        $zonaparkirs = ZonaParkir ::all();
        $title = 'Hapus Zona Parkir!';
        $text = "Apakah Kamu Ingin Menghapusnya?";
        confirmDelete($title, $text);
        return view('backend.admin.zonaparkir.index', compact('zonaparkirs','users'), ["title" => "Zona Parkir"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth()->user();
        $zonaparkirs = ZonaParkir::all();
        return view('backend.admin.zonaparkir.create',  compact('zonaparkirs','users'), ["title" => "Tambah Zona Parkir"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $zonaparkirs = new ZonaParkir();
        $zonaparkirs->create($request->all());
        return redirect()->route('zonaparkir.index')->with('success', 'Berhasil Menambahkan Data');
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
        $zonaparkirs = ZonaParkir::findOrFail($id);
        return view('backend.admin.zonaparkir.edit', compact('zonaparkirs','users'), ["title" => "Edit Zona Parkir"]);
    }

    public function update(Request $request, $id)
    {
        $zonaparkirs = ZonaParkir::findOrFail($id);
        $zonaparkirs->update($request->all());

        return redirect()->route('zonaparkir.index')->with('success', 'Berhasil Mengupdate Data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the data barang by ID
        $data = ZonaParkir::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('zonaparkir.index')->with('success', 'Berhasil Menghapus Data');
    }
}

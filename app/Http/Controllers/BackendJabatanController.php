<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class BackendJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth()->user();
        $jabatans = Jabatan::all();
        $title = 'Hapus Nama Jabatan!';
        $text = "Apakah Kamu Ingin Menghapusnya?";
        confirmDelete($title, $text);
        return view('backend.admin.Jabatan.index', compact('jabatans', 'users'), ["title" => "Jabatan"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth()->user();
        $jabatans = Jabatan::all();
        return view('backend.admin.Jabatan.create',  compact('jabatans','users'), ["title" => "Tambah Jabatan"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jabatan = new Jabatan();
        $jabatan->create($request->all());
        return redirect()->route('jabatan.index')->with('success', 'Berhasil Menambahkan Data');
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
        $jabatan = Jabatan::findOrFail($id);
        return view('backend.admin.jabatan.edit', compact('jabatan','users'), ["title" => "Edit Jabatan"]);
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Berhasil Mengupdate Data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the data barang by ID
        $data = Jabatan::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('jabatan.index')->with('success', 'Berhasil Menghapus Data');
    }
}

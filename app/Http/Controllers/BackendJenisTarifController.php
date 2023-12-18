<?php

namespace App\Http\Controllers;

use App\Models\JenisTarif;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class BackendJenisTarifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth()->user();
        $jenistarifs = JenisTarif::all();
        $title = 'Hapus Jenis Tarif!';
        $text = "Apakah Kamu Ingin Menghapusnya?";
        confirmDelete($title, $text);
        return view('backend.admin.jenistarif.index', compact('jenistarifs','users'), ["title" => "Jenis Tarif"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth()->user();
        $jenistarifs = JenisTarif::all();
        return view('backend.admin.jenistarif.create',  compact('jenistarifs','users'), ["title" => "Tambah Jenis Tarif"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jenistarif = new JenisTarif();
        $jenistarif->create($request->all());
        return redirect()->route('tarif.index')->with('success', 'Berhasil Menambahkan Data');
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
        $jenistarif = JenisTarif::findOrFail($id);
        return view('backend.admin.jenistarif.edit', compact('jenistarif','users'), ["title" => "Edit Jenis Tarif"]);
    }

    public function update(Request $request, $id)
    {
        $jenistarif = JenisTarif::findOrFail($id);
        $jenistarif->update($request->all());

        return redirect()->route('tarif.index')->with('success', 'Berhasil Mengupdate Data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the data barang by ID
        $data = JenisTarif::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('tarif.index')->with('success', 'Berhasil Menghapus Data');
    }
}

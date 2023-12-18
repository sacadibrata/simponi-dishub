<?php

namespace App\Http\Controllers;

use App\Models\BesaranTarif;
use App\Models\JenisTarif;
use App\Models\Kendaraan;
use App\Models\ZonaParkir;
use Illuminate\Http\Request;

class BackendBesaranTarifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth()->user();
        $besaranTarif = BesaranTarif::all();
        $kendaraan = Kendaraan::all();
        $jenisTarif = JenisTarif::all();
        $zonaparkirs = ZonaParkir::all();
        $title = 'Hapus Besaran Tarif!';
        $text = "Apakah Kamu Ingin Menghapusnya?";
        confirmDelete($title, $text);
        return view('backend.admin.besarantarif.index', compact('besaranTarif','kendaraan','jenisTarif','users'), ["title" => "Besaran Tarif"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth()->user();
        $besaranTarif = BesaranTarif::all();
        $zonaparkirs = ZonaParkir::all();
        $kendaraan = Kendaraan::all();
        $jenistarif = JenisTarif::all();
        return view('backend.admin.besaranTarif.create',  compact('zonaparkirs','besaranTarif','kendaraan','jenistarif','users'), ["title" => "Tambah Besaran Tarif"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $besaranTarif = new BesaranTarif();
        $besaranTarif->create($request->all());
        return redirect()->route('besaranTarif.index')->with('success', 'Berhasil Menambahkan Data');
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
        $besaranTarif = BesaranTarif::findOrFail($id);
        return view('backend.admin.besaranTarif.edit', compact('besaranTarif','users'), ["title" => "Edit Besaran Tarif"]);
    }

    public function update(Request $request, $id)
    {
        $besaranTarif = BesaranTarif::findOrFail($id);
        $besaranTarif->update($request->all());

        return redirect()->route('besaranTarif.index')->with('success', 'Berhasil Mengupdate Data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the data barang by ID
        $data = BesaranTarif::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('besaranTarif.index')->with('success', 'Berhasil Menghapus Data');
    }
}

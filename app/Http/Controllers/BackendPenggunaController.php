<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackendPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth()->user();
        $title = 'Hapus Hak Akses!';
        $text = "Apakah Kamu Ingin Menghapusnya?";
        confirmDelete($title, $text);
        $penggunas = User::all();
        return view('backend.admin.pengguna.index', compact('penggunas','users'), ["title" => "Profil Pengguna"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        $users = Auth()->user();
        $penggunas = DB::table('users')
                    ->join('roles', 'users.role_id','roles.id')
                    ->join('jabatans', 'users.jabatan_id','jabatans.id')
                    ->where('users.id', $id)
                    ->select('users.id as id_users','users.nik', 'users.name','users.username',
                    'jabatans.id as id_jabatan','jabatans.nama_jabatan','users.notelp','users.tempatlhr',
                    'users.tgllahir','roles.id as id_role','roles.nama_role','users.foto','users.email',
                    'users.jenisKelamin','users.alamat'
                    )
                    ->first();

        return view('backend.admin.pengguna.profilpengguna', compact('penggunas','users'), ["title" => "Profil Pengguna"]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the data barang by ID
        $data = User::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('pengguna.index')->with('success', 'Berhasil Menghapus Data');
    }
}

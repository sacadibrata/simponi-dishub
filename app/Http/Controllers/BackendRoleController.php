<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class BackendRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth()->user();
        $roles = Role::all();
        $title = 'Hapus Hak Akses!';
        $text = "Apakah Kamu Ingin Menghapusnya?";
        confirmDelete($title, $text);
        return view('backend.admin.role.index', compact('roles','users'), ["title" => "Hak Akses"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth()->user();
        $roles = Role::all();
        return view('backend.admin.role.create',  compact('roles','users'), ["title" => "Tambah Hak Akses"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = new role();
        $role->create($request->all());
        return redirect()->route('role.index')->with('success', 'Berhasil Menambahkan Data');
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
        $role = Role::findOrFail($id);
        return view('backend.admin.role.edit', compact('role','users'), ["title" => "Edit Hak Akses"]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());

        return redirect()->route('role.index')->with('success', 'Berhasil Mengupdate Data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the data barang by ID
        $data = Role::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('role.index')->with('success', 'Berhasil Menghapus Data');
    }
}

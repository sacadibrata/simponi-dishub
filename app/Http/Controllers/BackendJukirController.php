<?php

namespace App\Http\Controllers;

use App\Models\Jukir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BackendJukirController extends Controller
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
        $jukirs = DB::table('jukirs')
                ->join('users', 'jukirs.user_id','users.id')
                ->join('roles', 'users.role_id','roles.id')
                ->join('jabatans', 'users.jabatan_id','jabatans.id')
                ->select('users.id as id_users','users.nik', 'users.name','users.username',
                'jabatans.id as id_jabatan','jabatans.nama_jabatan','users.notelp','users.tempatlhr',
                'users.tgllahir','roles.id as id_role','roles.nama_role','users.foto','users.email',
                'users.jenisKelamin','users.alamat','jukirs.nip','jukirs.id'
        )
        ->get();
        $penggunas = User::all();
        return view('backend.admin.jukir.index', compact('jukirs','penggunas','users'), ["title" => "Juru Parkir"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = Auth()->user();
        $penggunas = User::all()->where('role_id','2');;
         // Generate NIP secara random dengan kode awal DISHUB-
        // Generate angka random dengan panjang 6 digit
        $randomNumber = str_pad(rand(0, 500), 3, '0', STR_PAD_LEFT);

        // Gabungkan dengan kode awal
        $randomNIP = 'DISHUB-' . $randomNumber;
        return view('backend.admin.jukir.create', compact('penggunas','users','randomNIP'), ["title" => "Juru Parkir"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jukir = new Jukir();
        $jukir->create($request->all());
        return redirect()->route('jukir.index')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = Auth()->user();
        $penggunas = DB::table('jukirs')
                    ->join('users', 'jukirs.user_id','users.id')
                    ->join('roles', 'users.role_id','roles.id')
                    ->join('jabatans', 'users.jabatan_id','jabatans.id')
                    ->where('jukirs.id', $id)
                    ->select('users.id as id_users','users.nik', 'users.name','users.username',
                    'jabatans.id as id_jabatan','jabatans.nama_jabatan','users.notelp','users.tempatlhr',
                    'users.tgllahir','roles.id as id_role','roles.nama_role','users.foto','users.email',
                    'users.jenisKelamin','users.alamat','jukirs.nip'
                    )
                    ->first();

        return view('backend.admin.jukir.profiljukir', compact('penggunas','users'), ["title" => "Detail Juru Parkir"]);
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
        $data = Jukir::findOrFail($id);

        // Perform the deletion
        $data->delete();

        // Redirect back to the list of data barang or any other page as needed
        return redirect()->route('jukir.index')->with('success', 'Berhasil Menghapus Data');
    }
}

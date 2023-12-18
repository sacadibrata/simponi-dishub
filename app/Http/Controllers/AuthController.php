<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Role;
use App\Models\User;
use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showRegistrationForm()
    {
        $roles = Role::all();
        $jabatans = Jabatan::all();
        return view('backend.auth.register', compact('roles','jabatans'), ["title" => "Registrasi"]);
    }

    public function showLoginForm()
    {
        return view('backend.auth.login', ["title" => "Login"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        $fotoUser = $request->foto;
        $fotoUsers = date('Y-m-d')."-".$fotoUser->getClientOriginalName();
        $fotoUser->move(public_path().'/pengguna', $fotoUsers);

        $users = new User();
        $users->nik = $request->nik;
        $users->name = $request->name;
        $users->jenisKelamin = $request->jenisKelamin;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->jabatan_id = $request->jabatan_id;
        $users->notelp = $request->notelp;
        $users->tempatlhr = $request->tempatlhr;
        $users->tgllahir = $request->tgllahir;
        $users->role_id = $request->role_id;
        $users->foto = $fotoUsers;
        $users->save();
        return redirect()->route('login')->with('success', 'Berhasil Menambahkan Data');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role_id == '1') {
                return redirect()->route('admin.indexAdmin')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '2') {
                return redirect()->route('dashboardCeger')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '3') {
                return redirect()->route('dashboardCimanggis')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '4') {
                return redirect()->route('dashboardCiputat')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '5') {
                return redirect()->route('dashboardJengkol')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '6') {
                return redirect()->route('dashboardJombang')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '7') {
                return redirect()->route('dashboardSerpong')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '8') {
                return redirect('backend/kapas/dashboard')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            } elseif (Auth::user()->role_id == '9') {
                return redirect('backend/pengelola/dashboard')->with('success', 'Anda Berhasil Login'); // Change the redirect path as needed
            }
        } else {
            return redirect()->route('loginForm')->with('failed', 'Email atau Password Anda Salah');;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginForm')->with('success', 'Anda Berhasil Logout');
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
        //
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
        //
    }
}

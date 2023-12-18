<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackendAdminController;
use App\Http\Controllers\BackendBesaranTarifController;
use App\Http\Controllers\BackendJabatanController;
use App\Http\Controllers\BackendJenisTarifController;
use App\Http\Controllers\BackendJukirController;
use App\Http\Controllers\BackendKendaraanController;
use App\Http\Controllers\BackendPenggunaController;
use App\Http\Controllers\BackendRoleController;
use App\Http\Controllers\BackendZonaParkirController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('backend.admin.dashboard.index');
});
*/

Route::middleware(['guest'])->group(function () {
        /* Login */
        Route::get('/', [AuthController::class, 'showLoginForm'])->name('loginForm');
        Route::post('/', [AuthController::class, 'login'])->name('login');

        /* Register */
        Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('registerForm');
        Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware(['auth', 'userAkses:1'])->group(function () {
        /* Modul Dashboard */
        Route::get('dashboard-admin', [BackendAdminController::class, 'indexAdmin'])->name('admin.indexAdmin');

        /* Modul User */
        Route::get('list-pengguna', [BackendPenggunaController::class, 'index'])->name('pengguna.index');
        Route::get('edit-hak-akses/{id}', [BackendPenggunaController::class, 'edit'])->name('pengguna.edit');
        Route::get('profil-pengguna/{id}', [BackendPenggunaController::class, 'show'])->name('pengguna.show');
        Route::put('backend/admin/pengguna/{id}', [BackendPenggunaController::class, 'update'])->name('pengguna.update');
        Route::delete('backend/admin/pengguna/{id}', [BackendPenggunaController::class, 'destroy'])->name('pengguna.destroy');

        /* Modul Role */
        Route::get('list-hak-akses', [BackendRoleController::class, 'index'])->name('role.index');
        Route::get('tambah-hak-akses', [BackendRoleController::class, 'create'])->name('role.create');
        Route::post('backend/admin/role', [BackendRoleController::class, 'store'])->name('role.store');
        Route::get('edit-hak-akses/{id}', [BackendRoleController::class, 'edit'])->name('role.edit');
        Route::put('backend/admin/role/{id}', [BackendRoleController::class, 'update'])->name('role.update');
        Route::delete('backend/admin/role/{id}', [BackendRoleController::class, 'destroy'])->name('role.destroy');

        /* Modul Zona Parkir */
        Route::get('list-zona-parkir', [BackendZonaParkirController::class, 'index'])->name('zonaparkir.index');
        Route::get('tambah-zona-parkir', [BackendZonaParkirController::class, 'create'])->name('zonaparkir.create');
        Route::post('backend/admin/zonaparkir', [BackendZonaParkirController::class, 'store'])->name('zonaparkir.store');
        Route::get('edit-zona-parkir/{id}', [BackendZonaParkirController::class, 'edit'])->name('zonaparkir.edit');
        Route::put('backend/admin/zonaparkir/{id}', [BackendZonaParkirController::class, 'update'])->name('zonaparkir.update');
        Route::delete('backend/admin/zonaparkir/{id}', [BackendZonaParkirController::class, 'destroy'])->name('zonaparkir.destroy');

        /* Modul Jukir */
        Route::get('list-juru-parkir', [BackendJukirController::class, 'index'])->name('jukir.index');
        Route::get('tambah-juru-parkir', [BackendJukirController::class, 'create'])->name('jukir.create');
        Route::post('backend/admin/jukir', [BackendJukirController::class, 'store'])->name('jukir.store');
        Route::get('edit-juru-parkir/{id}', [BackendJukirController::class, 'edit'])->name('jukir.edit');
        Route::get('profil-juru-parkir/{id}', [BackendJukirController::class, 'show'])->name('jukir.show');
        Route::put('backend/admin/jukir/{id}', [BackendJukirController::class, 'update'])->name('jukir.update');
        Route::delete('backend/admin/jukir/{id}', [BackendJukirController::class, 'destroy'])->name('jukir.destroy');

        /* Modul Kendaraan */
        Route::get('list-jenis-kendaraan', [BackendKendaraanController::class, 'index'])->name('kendaraan.index');
        Route::get('tambah-jenis-kendaraan', [BackendKendaraanController::class, 'create'])->name('kendaraan.create');
        Route::post('backend/admin/kendaraan', [BackendKendaraanController::class, 'store'])->name('kendaraan.store');
        Route::get('edit-jenis-kendaraan/{id}', [BackendKendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::put('backend/admin/kendaraan/{id}', [BackendKendaraanController::class, 'update'])->name('kendaraan.update');
        Route::delete('backend/admin/kendaraan/{id}', [BackendKendaraanController::class, 'destroy'])->name('kendaraan.destroy');

        /* Modul Jenis Tarif */
        Route::get('list-jenis-tarif', [BackendJenisTarifController::class, 'index'])->name('tarif.index');
        Route::get('tambah-jenis-tarif', [BackendJenisTarifController::class, 'create'])->name('tarif.create');
        Route::post('backend/admin/tarif', [BackendJenisTarifController::class, 'store'])->name('tarif.store');
        Route::get('edit-jenis-tarif/{id}', [BackendJenisTarifController::class, 'edit'])->name('tarif.edit');
        Route::put('backend/admin/tarif/{id}', [BackendJenisTarifController::class, 'update'])->name('tarif.update');
        Route::delete('backend/admin/tarif/{id}', [BackendJenisTarifController::class, 'destroy'])->name('tarif.destroy');

         /* Modul Besaran Tarif */
         Route::get('list-besaran-tarif', [BackendBesaranTarifController::class, 'index'])->name('besaranTarif.index');
         Route::get('tambah-besaran-tarif', [BackendBesaranTarifController::class, 'create'])->name('besaranTarif.create');
         Route::post('backend/admin/besaranTarif', [BackendBesaranTarifController::class, 'store'])->name('besaranTarif.store');
         Route::get('edit-besaran-tarif/{id}', [BackendBesaranTarifController::class, 'edit'])->name('besaranTarif.edit');
         Route::put('backend/admin/besaranTarif/{id}', [BackendBesaranTarifController::class, 'update'])->name('besaranTarif.update');
         Route::delete('backend/admin/besaranTarif/{id}', [BackendBesaranTarifController::class, 'destroy'])->name('besaranTarif.destroy');

        /* Modul Jabatan */
        Route::get('list-jabatan', [BackendJabatanController::class, 'index'])->name('jabatan.index');
        Route::get('tambah-jabatan', [BackendJabatanController::class, 'create'])->name('jabatan.create');
        Route::post('backend/admin/jabatan', [BackendJabatanController::class, 'store'])->name('jabatan.store');
        Route::get('edit-jabatan/{id}', [BackendJabatanController::class, 'edit'])->name('jabatan.edit');
        Route::put('backend/admin/jabatan/{id}', [BackendJabatanController::class, 'update'])->name('jabatan.update');
        Route::delete('backend/admin/jabatan/{id}', [BackendJabatanController::class, 'destroy'])->name('jabatan.destroy');

        /* Modul Logout */
        Route::post('backend/admin/logout', [AuthController::class, 'logout'])->name('logoutAll');
});

Route::get('page-not-found', [BackendAdminController::class, 'indexPageNotFound'])->name('page.indexPageNotFound');



<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SeksiController;
use App\Http\Controllers\StorganisasiController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\VisimisiController;
use App\Models\Visimisi;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//*-----*ADMIN*-----*
//*-----Login-----*
Route::get('/11475-adm', [AuthController::class, 'view']);
Route::post('/11475-adm/autentikasi', [AuthController::class, 'autentikasi']);
Route::get('/11475-adm/logout', [AuthController::class, 'logout'])->name('logout');

//*-----Dashboard-----*
Route::get('/11475-adm/dashboard', [DashboardController::class, 'view'])->name('dashboard');

//*-----Seksi-----*
Route::get('/11475-adm/seksi', [SeksiController::class, 'view'])->name('seksi');
Route::post('/11475-adm/seksi/store', [SeksiController::class, 'store'])->name('a.seksi');
Route::post('/11475-adm/seksi/edit', [SeksiController::class, 'edit']);
Route::post('/11475-adm/seksi/update', [SeksiController::class, 'update'])->name('u.seksi');
Route::get('/11475-adm/seksi/status/{id_seksi}', [SeksiController::class, 'status']);
Route::get('/11475-adm/seksi/hapus/{id_seksi}', [SeksiController::class, 'hapus']);

//*-----Jabatan-----*
Route::get('/11475-adm/jabatan', [JabatanController::class, 'view'])->name('jabatan');
Route::post('/11475-adm/jabatan/store', [JabatanController::class, 'store'])->name('a.jabatan');
Route::post('/11475-adm/jabatan/edit', [JabatanController::class, 'edit']);
Route::post('/11475-adm/jabatan/update', [JabatanController::class, 'update'])->name('u.jabatan');
Route::get('/11475-adm/jabatan/hapus/{id_jabatan}', [JabatanController::class, 'hapus']);

//*-----Kategori-----*
Route::get('/11475-adm/kategori', [KategoriController::class, 'view'])->name('kategori');
Route::post('/11475-adm/kategori/store', [KategoriController::class, 'store'])->name('a.kategori');
Route::post('/11475-adm/kategori/edit', [KategoriController::class, 'edit']);
Route::post('/11475-adm/kategori/update', [KategoriController::class, 'update'])->name('u.kategori');
Route::get('/11475-adm/kategori/hapus/{id_kategori}', [KategoriController::class, 'hapus']);

//*-----Kategori-----*
Route::get('/11475-adm/kategori', [KategoriController::class, 'view'])->name('kategori');
Route::post('/11475-adm/kategori/store', [KategoriController::class, 'store'])->name('a.kategori');
Route::post('/11475-adm/kategori/edit', [KategoriController::class, 'edit']);
Route::post('/11475-adm/kategori/update', [KategoriController::class, 'update'])->name('u.kategori');
Route::get('/11475-adm/kategori/hapus/{id_kategori}', [KategoriController::class, 'hapus']);

//*-----Header-----*
Route::get('/11475-adm/header', [HeaderController::class, 'view'])->name('header');
Route::post('/11475-adm/header/edit', [HeaderController::class, 'edit']);
Route::post('/11475-adm/header/update', [HeaderController::class, 'update'])->name('u.header');

//*-----Beranda-----*
Route::get('/11475-adm/beranda', [BerandaController::class, 'data'])->name('beranda');
Route::post('/11475-adm/beranda/edit', [BerandaController::class, 'edit']);
Route::post('/11475-adm/beranda/update', [BerandaController::class, 'update'])->name('u.beranda');

//*-----Footer-----*
Route::get('/11475-adm/footer', [FooterController::class, 'view'])->name('footer');
Route::post('/11475-adm/footer/edit', [FooterController::class, 'edit']);
Route::post('/11475-adm/footer/update', [FooterController::class, 'update'])->name('u.footer');

//*-----Visi dan Misi-----*
Route::get('/11475-adm/profil/visidanmisi', [VisimisiController::class, 'data'])->name('visidanmisi');
Route::post('/11475-adm/profil/visidanmisi/store', [VisimisiController::class, 'store'])->name('a.misi');
Route::post('/11475-adm/profil/visidanmisi/edit', [VisimisiController::class, 'edit']);
Route::post('/11475-adm/profil/visidanmisi/update', [VisimisiController::class, 'update'])->name('u.visidanmisi');
Route::get('/11475-adm/profil/visidanmisi/hapus/{id_visimisi}', [VisimisiController::class, 'hapus']);

//*-----Struktur Organisasi-----*
Route::get('/11475-adm/profil/storganisasi', [StorganisasiController::class, 'data'])->name('storganisasi');
Route::post('/11475-adm/profil/storganisasi/edit', [StorganisasiController::class, 'edit']);
Route::post('/11475-adm/profil/storganisasi/update', [StorganisasiController::class, 'update'])->name('u.storganisasi');

//*-----Pegawai-----*
Route::get('/11475-adm/profil/pegawai', [PegawaiController::class, 'data'])->name('pegawai');
Route::post('/11475-adm/profil/pegawai/store', [PegawaiController::class, 'store'])->name('a.pegawai');
Route::post('/11475-adm/profil/pegawai/edit', [PegawaiController::class, 'edit']);
Route::post('/11475-adm/profil/pegawai/update', [PegawaiController::class, 'update'])->name('u.pegawai');
Route::get('/11475-adm/profil/pegawai/status/{id_pegawai}', [PegawaiController::class, 'status']);
Route::get('/11475-adm/profil/pegawai/hapus/{id_pegawai}', [PegawaiController::class, 'hapus']);

//*-----Tentang-----*
Route::get('/11475-adm/profil/tentang', [TentangController::class, 'data'])->name('tentang');
Route::post('/11475-adm/profil/tentang/edit', [TentangController::class, 'edit']);
Route::post('/11475-adm/profil/tentang/update', [TentangController::class, 'update'])->name('u.tentang');

//*-----Agenda-----*
Route::get('/11475-adm/agenda', [AgendaController::class, 'data'])->name('agenda');
Route::get('/11475-adm/agenda/detail', [AgendaController::class, 'detail']);
Route::post('/11475-adm/agenda/store', [AgendaController::class, 'store'])->name('a.agenda');
Route::post('/11475-adm/agenda/edit', [AgendaController::class, 'edit']);
Route::post('/11475-adm/agenda/update', [AgendaController::class, 'update'])->name('u.agenda');
Route::get('/11475-adm/agenda/status/{id_agenda}', [AgendaController::class, 'status']);
Route::get('/11475-adm/agenda/hapus/{id_agenda}', [AgendaController::class, 'hapus']);



//---*VISITOR*---
//---Beranda---
Route::get('/', [BerandaController::class, 'view']);

//---Tentang---
Route::get('/tentang', [TentangController::class, 'view']);

//---Visi Misi---
Route::get('/visidanmisi', [VisimisiController::class, 'view']);

//---Struktur Organisasi---
Route::get('/strukturorganisasi', [StorganisasiController::class, 'view']);

//---Pegawai---
Route::get('/pegawai/{id_seksi}', [PegawaiController::class, 'view']);


<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SeksiController;
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
Route::post('/11475-adm/store', [SeksiController::class, 'store'])->name('a.seksi');
Route::post('/11475-adm/seksi/edit', [SeksiController::class, 'edit']);
Route::post('/11475-adm/seksi/update', [SeksiController::class, 'update'])->name('u.seksi');
Route::get('/11475-adm/seksi/status/{id_seksi}', [SeksiController::class, 'status']);
Route::get('/11475-adm/seksi/hapus/{id_seksi}', [SeksiController::class, 'hapus']);

Route::get('/11475-adm/tentang', [SeksiController::class, 'view'])->name('tentang');

//---*VISITOR*--- 
//---Beranda---
Route::get('/', [BerandaController::class, 'view']);
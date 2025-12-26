<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
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
Route::get('/11475-adm/logout', [AuthController::class, 'logout']);

//*-----Dashboard-----*
Route::get('/11475-adm/dashboard', [DashboardController::class, 'view']);

//---*VISITOR*--- 
//---Beranda---
Route::get('/', [BerandaController::class, 'Vview']);
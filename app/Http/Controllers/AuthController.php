<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{   
    public function view(){

        return view('manager.auth.view');

    }

    public function autentikasi(Request $request)
    {
         if (Auth::guard('admin')->attempt(['email' => $request->username, 'password' => $request->password])) {
            return redirect('/11475-adm/dashboard');
        } else {
            return redirect('/11475-adm')->with(['warning' => 'Email atau Password Anda Salah']);
        }

    }

    public function logout(Request $request) {

        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/11475-adm');
    }

}

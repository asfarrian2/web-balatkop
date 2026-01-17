<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Header;
use App\Models\Beranda;
use App\Models\Footer;
use App\Models\Storganisasi;

class StorganisasiController extends Controller
{

    public function view(){

        $headers  = Header::all();

        $footer   = Footer::all();

        $sto      = Storganisasi::all();

        return view('website.storganisasi.view', compact('headers', 'footer', 'sto'));
    }
    
    public function data(){

        $sto = Storganisasi::all();

        return view('manager.storganisasi.view', compact('sto'));
    }

    public function edit(Request $request){

        $id_sto = $request->id_sto;
        $id_sto = Crypt::decrypt($id_sto);

        $sto = Storganisasi::where('id_sto', $id_sto)->first();

        if($sto->status == 'text') {
            return view('manager.storganisasi.edit', compact('sto'));
        }else{
            return view('manager.storganisasi.upload', compact('sto'));
        }
        
    }
    
}

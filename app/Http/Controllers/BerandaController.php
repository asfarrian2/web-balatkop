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

class BerandaController extends Controller
{

    //--*-------Admin Beranda--*-------//
    public function data(){
        
        $bp = Beranda::where('jenis', 'Banner Primary')->get();
        
        return view('manager.beranda.view', compact('bp'));

    }


    //Visitor Beranda
    public function view(){
        
        $headers = Header::all();
        
        return view('website.beranda.view', compact('headers'));

    }

}

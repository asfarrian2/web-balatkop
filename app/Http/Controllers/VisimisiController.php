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
use App\Models\Visimisi;
use Spatie\FlareClient\View;

class VisimisiController extends Controller
{
    public function view(){

        $headers = Header::all();

        $footer  = Footer::all();

        $visi    = Visimisi::all();

        $misi    = Visimisi::where('jenis', 'misi')->where('status', 'text')->get();

        return view('website.visimisi.view', compact('headers', 'footer', 'visi', 'misi'));
    }

    public function data(){

        $vm = Visimisi::all();
        $misi= Visimisi::where('jenis', 'misi')->where('status', 'text')->get();

        return view('manager.visidanmisi.view', compact('vm', 'misi'));
    }

        public function edit(Request $request){

        $id_visimisi = $request->id_visimisi;
        $id_visimisi = Crypt::decrypt($id_visimisi);

        $visimisi = Visimisi::where('id_visimisi', $id_visimisi)->first();

        if($visimisi->status == 'text') {
            return view('manager.visimisi.edit', compact('visimisi'));
        }else{
            return view('manager.visimisi.upload', compact('visimisi'));
        }
        
    }



}

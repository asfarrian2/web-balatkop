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
use App\Models\Maklumat;

class MaklumatController extends Controller
{

    public function view(){

        $headers  = Header::all();

        $footer   = Footer::all();

        $tentang  = Maklumat::all();

        return view('website.tentang.view', compact('headers', 'footer', 'tentang'));
    }
    
    public function data(){

        $tentang = Maklumat::all();

        return view('manager.tentang.view', compact('tentang'));
    }

    public function edit(Request $request){

        $id_tentang = $request->id_tentang;
        $id_tentang = Crypt::decrypt($id_tentang);

        $tentang = Maklumat::where('id_tentang', $id_tentang)->first();

        if($tentang->status == 'text') {
            return view('manager.tentang.edit', compact('tentang'));
        }else{
            return view('manager.tentang.upload', compact('tentang'));
        }
        
    }

    public function update(Request $request){

        $id_tentang     = $request->id;
        $id_tentang     = Crypt::decrypt($id_tentang);
        $keterangan     = $request->input('keterangan');

        if ($request->hasFile('image')) {
            $image     = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = Maklumat::where('id_tentang', $id_tentang)->value('nama') . '.' . $extension;
            $image->move(public_path('assets/images/Tentang'), $imageName);
            $data = [
                'keterangan' => $imageName
            ];
        } else {
            $data = [
                'keterangan' => $keterangan
            ];
        }

        $update = Maklumat::where('id_tentang', $id_tentang)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }
    
}


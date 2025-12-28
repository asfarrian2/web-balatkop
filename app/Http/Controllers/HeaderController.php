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

class HeaderController extends Controller
{
    public function view() {

        $header = Header::all();

        return view('manager.header.view', compact('header'));
    }

    public function edit(Request $request){

        $id_header = $request->id_header;
        $id_header = Crypt::decrypt($id_header);

        $header = Header::where('id_header', $id_header)->first();

        return view('manager.header.edit', compact('header'));
        
    }

    public function update(Request $request){

        $id_header   = $request->id;
        $id_header   = Crypt::decrypt($id_header);
        $nama        = $request->nama;
        $kelas       = $request->kelas;

        $data       = [
            'header'     => $nama,
            'kelas'       => $kelas
        ];

        $update = Header::where('id_header', $id_header)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Diubah']);
        }
        
    }

}

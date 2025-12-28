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
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function view() {

        $jabatan = Jabatan::all();

        return view('manager.jabatan.view', compact('jabatan'));
    }

    public function store(Request $request){

         $id_jabatan = Jabatan::latest('id_jabatan')->first();

        $kodeobjek ="j-";

        if($id_jabatan == null){
            $nomorurut = "01";
        }else{
            $nomorurut = substr($id_jabatan->id_jabatan, 2, 2) + 1;
            $nomorurut = str_pad($nomorurut, 2, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $jabatan = $request->nama;
        $kelas   = $request->kelas;

        $data = [
            'id_jabatan'  => $id,
            'jabatan'     => $jabatan,
            'kelas'       => $kelas
        ];
        $simpan = Jabatan::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }

    }

    public function edit(Request $request){

        $id_jabatan = $request->id_jabatan;
        $id_jabatan = Crypt::decrypt($id_jabatan);

        $jabatan = Jabatan::where('id_jabatan', $id_jabatan)->first();

        return view('manager.jabatan.edit', compact('jabatan'));
        
    }

    public function update(Request $request){

        $id_jabatan   = $request->id;
        $id_jabatan   = Crypt::decrypt($id_jabatan);
        $nama         = $request->nama;
        $kelas        = $request->kelas;

        $data       = [
            'jabatan'     => $nama,
            'kelas'       => $kelas
        ];

        $update = Jabatan::where('id_jabatan', $id_jabatan)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Diubah']);
        }
        
    }

    public function hapus($id_jabatan){

        $id_jabatan = Crypt::decrypt($id_jabatan);

        $delete = Jabatan::where('id_jabatan',$id_jabatan)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

}


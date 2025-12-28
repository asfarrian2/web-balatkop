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
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function view() {

        $kategori = Kategori::all();

        return view('manager.kategori.view', compact('kategori'));
    }

    public function store(Request $request){

         $id_kategori = Kategori::latest('id_kategori')->first();

        $kodeobjek ="c-";

        if($id_kategori == null){
            $nomorurut = "01";
        }else{
            $nomorurut = substr($id_kategori->id_kategori, 2, 2) + 1;
            $nomorurut = str_pad($nomorurut, 2, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $kategori = $request->nama;

        $data = [
            'id_kategori'  => $id,
            'kategori'     => $kategori
        ];
        $simpan = Kategori::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }

    }

    public function edit(Request $request){

        $id_kategori = $request->id_kategori;
        $id_kategori = Crypt::decrypt($id_kategori);

        $kategori = Kategori::where('id_kategori', $id_kategori)->first();

        return view('manager.kategori.edit', compact('kategori'));
        
    }

    public function update(Request $request){

        $id_kategori   = $request->id;
        $id_kategori   = Crypt::decrypt($id_kategori);
        $nama         = $request->nama;

        $data       = [
            'kategori'     => $nama
        ];

        $update = Kategori::where('id_kategori', $id_kategori)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Diubah']);
        }
        
    }

    public function hapus($id_kategori){

        $id_kategori = Crypt::decrypt($id_kategori);

        $delete = Kategori::where('id_kategori',$id_kategori)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

}

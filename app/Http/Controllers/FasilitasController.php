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
use App\Models\Fasilitas;
use App\Models\Header;
use App\Models\Beranda;
use App\Models\Footer;

class FasilitasController extends Controller

{

    public function view(){

        $headers  = Header::all();

        $footer   = Footer::all();

        $fasilitas  = Fasilitas::all();

        return view('website.fasilitas.view', compact('headers', 'footer', 'fasilitas'));
    }

    public function data() {

        $fasilitas = Fasilitas::all();

        return view('manager.fasilitas.view', compact('fasilitas'));
    }

    public function store(Request $request){

         $id_fasilitas = Fasilitas::latest('id_fasilitas')->first();

        $kodeobjek ="F-";

        if($id_fasilitas == null){
            $nomorurut = "01";
        }else{
            $nomorurut = substr($id_fasilitas->id_fasilitas, 2, 2) + 1;
            $nomorurut = str_pad($nomorurut, 2, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $fasilitas  = $request->nama;
        $keterangan = $request->keterangan;

       if ($request->hasFile('image')) {

        $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = 'fasilitas-'.$nomorurut. '.' . $extension;
            $image->move(public_path('assets/images/fasilitas'), $imageName);

        $data = [
            'id_fasilitas' => $id,
            'fasilitas'    => $fasilitas,
            'keterangan'   => $keterangan,
            'gambar'       => $imageName,
            'status'       => '1'
        ];
         } else {
            $data = [
                'id_fasilitas' => $id,
                'fasilitas'    => $fasilitas,
                'keterangan'   => $keterangan,
                'status'       => '1'
        ];
        }
        $simpan = Fasilitas::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }

    }

    public function edit(Request $request){

        $id_fasilitas = $request->id_fasilitas;
        $id_fasilitas = Crypt::decrypt($id_fasilitas);

        $fasilitas = Fasilitas::where('id_fasilitas', $id_fasilitas)->first();

        return view('manager.fasilitas.edit', compact('fasilitas'));
        
    }

    public function update(Request $request){

        $id_fasilitas   = $request->id;
        $id_fasilitas   = Crypt::decrypt($id_fasilitas);
        $nama           = $request->nama;
        $keterangan     = $request->keterangan;
        $namafoto       = Fasilitas::where('id_fasilitas', $id_fasilitas)->value('gambar');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $namafoto;
            $image->move(public_path('assets/images/visimisi'), $imageName);
            $data = [
                  'fasilitas'    => $nama,
                  'keterangan'   => $keterangan,
                  'gambar'       => $imageName
            ];
        } else {
            $data = [
                  'fasilitas'    => $nama,
                  'keterangan'   => $keterangan
            ];
        }

        $update = Fasilitas::where('id_fasilitas', $id_fasilitas)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Diubah']);
        }
        
    }

    public function status($id_fasilitas){

        $id_fasilitas   = Crypt::decrypt($id_fasilitas);
        $fasilitas      = Fasilitas::where('id_fasilitas', $id_fasilitas)->first();

        $status     = $fasilitas->status;

        if($status == 0){
            $data = [
                'status' => '1'
            ];
        }else{
            $data = [
                'status' => '0'
            ];
        }

        $update = Fasilitas::where('id_fasilitas',$id_fasilitas)->update($data);

        if ($update) {
            return Redirect::back()->with(['success' => 'Status Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Status Data Gagal Diubah']);
        }
    }

    public function hapus($id_fasilitas){

        $id_fasilitas = Crypt::decrypt($id_fasilitas);

        $delete = Fasilitas::where('id_fasilitas',$id_fasilitas)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

}


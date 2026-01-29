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
use Illuminate\Support\Str;
use App\Models\Header;
use App\Models\Beranda;
use App\Models\Footer;
use App\Models\Layanan;


class LayananController extends Controller
{

    public function view($slug){

        $headers = Header::all();

        $footer  = Footer::all();

        $itemlayanan = Layanan::where('slug', $slug)->first();

        return view('website.layanan.view', compact('headers', 'footer', 'itemlayanan'));
    }


    public function data(){

        $layanan = Layanan::all();

        return view('manager.layanan.view', compact('layanan'));
    }

    public function store(Request $request){

        $id_layanan = Layanan::latest('id_layanan')->first();

        $kodeobjek ="ly-";

        if($id_layanan == null){
            $nomorurut = "01";
        }else{
            $nomorurut = substr($id_layanan->id_layanan, 3, 2) + 1;
            $nomorurut = str_pad($nomorurut, 2, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $nama       = $request->layanan;
        $keterangan = $request->keterangan;
        $slug       = Str::slug($nama);
        if ($request->hasFile('image')) {

        $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $nomorurut.'-'.$nama . '.' . $extension;
            $image->move(public_path('assets/images/layanan'), $imageName);

        $data = [
            'id_layanan'  => $id,
            'nama'        => $nama,
            'keterangan'  => $keterangan,
            'slug'        => $slug,
            'gambar'      => $imageName,
            'status'      => '1'
        ];
         } else {
            $data = [
                'id_layanan'  => $id,
                'nama'        => $nama,
                'keterangan'  => $keterangan,
                'slug'        => $slug,
                'status'      => '1'
                ];
        }

        $simpan = Layanan::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }
    }

    public function edit($id_layanan){

        $id_layanan = Crypt::decrypt($id_layanan);

        $layanan    = Layanan::where('id_layanan', $id_layanan)->first();

        return view('manager.layanan.edit', compact('layanan'));
        
    }

    public function update(Request $request){

        $id_layanan   = $request->id;
        $id_layanan   = Crypt::decrypt($id_layanan);
        $namafoto     = Layanan::where('id_layanan', $id_layanan)->value('gambar');

        $nama    = $request->nama;
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $namafoto;
            $image->move(public_path('assets/images/layanan'), $imageName);
            $data = [
                'gambar'        => $imageName
            ];
        } else {
            $data = [
                'nama'        => $nama
            ];
        }

        $update = Layanan::where('id_layanan', $id_layanan)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }

    public function status($id_layanan){

        $id_layanan   = Crypt::decrypt($id_layanan);
        $nama      = Layanan::where('id_layanan', $id_layanan)->first();

        $status       = $nama->status;

        if($status == 0){
            $data = [
                'status' => '1'
            ];
        }else{
            $data = [
                'status' => '0'
            ];
        }

        $update = Layanan::where('id_layanan',$id_layanan)->update($data);

        if ($update) {
            return Redirect::back()->with(['success' => 'Status Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Status Data Gagal Diubah']);
        }
    }

    public function hapus($id_layanan){

        $id_layanan = Crypt::decrypt($id_layanan);

        $delete = Layanan::where('id_layanan',$id_layanan)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function keterangan(Request $request){

        $id_layanan   = $request->id;
        $id_layanan   = Crypt::decrypt($id_layanan);

        $konten    = $request->konten;

        $data = [
            'keterangan' => $konten
        ];

        $update = Layanan::where('id_layanan', $id_layanan)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }


}

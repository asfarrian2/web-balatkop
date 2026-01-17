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
            return view('manager.visidanmisi.edit', compact('visimisi'));
        }else{
            return view('manager.visidanmisi.upload', compact('visimisi'));
        }
        
    }

    public function update(Request $request){

        $id_visimisi   = $request->id;
        $id_visimisi   = Crypt::decrypt($id_visimisi);
        $keterangan    = $request->input('keterangan');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $id_visimisi . '.' . $extension;
            $image->move(public_path('assets/images/visimisi'), $imageName);
            $data = [
                'deskripsi' => $imageName
            ];
        } else {
            $data = [
                'deskripsi' => $keterangan
            ];
        }

        $update = Visimisi::where('id_visimisi', $id_visimisi)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }

    public function store(Request $request){

        $id_visimisi = Visimisi::latest('id_visimisi')->first();

        $kodeobjek ="vm-";

        if($id_visimisi == null){
            $nomorurut = "01";
        }else{
            $nomorurut = substr($id_visimisi->id_visimisi, 3, 2) + 1;
            $nomorurut = str_pad($nomorurut, 2, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $misi = $request->misi;

        $data = [
            'id_visimisi'  => $id,
            'nama'         => 'Misi',
            'jenis'        => 'misi',
            'status'       => 'text',
            'deskripsi'    => $misi
        ];

        $simpan = Visimisi::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }

    }

    public function hapus($id_visimisi){

        $id_visimisi = Crypt::decrypt($id_visimisi);

        $delete = Visimisi::where('id_visimisi',$id_visimisi)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }



}

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
use App\Models\Penulis;
use App\Models\Pegawai;

class PenulisController extends Controller
{
    public function view() {

        $penulis = Penulis::all();
        $pegawai = Pegawai::all();

        return view('manager.penulis.view', compact('penulis', 'pegawai'));
    }

    public function store(Request $request){

         $id_penulis = Penulis::latest('id_penulis')->first();

        $kodeobjek ="117";

        if($id_penulis == null){
            $nomorurut = "01";
        }else{
            $nomorurut = substr($id_penulis->id_penulis, 3, 2) + 1;
            $nomorurut = str_pad($nomorurut, 2, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $penulis  = $request->nama;
        $pegawai  = $request->pegawai;
        $pegawai  = Crypt::decrypt($pegawai);
        $username = $request->username;
        $password = $request->password;

        $data = [
            'id_penulis'  => $id,
            'id_pegawai'  => $pegawai,
            'nickname'    => $penulis,
            'username'    => $username,
            'password'    => Hash::make($password),
            'status'      => '1'
        ];
        $simpan = Penulis::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }

    }

    public function edit(Request $request){

        $id_penulis = $request->id_penulis;
        $id_penulis = Crypt::decrypt($id_penulis);

        $penulis = Penulis::where('id_penulis', $id_penulis)->first();

        return view('manager.penulis.edit', compact('penulis'));
        
    }

    public function update(Request $request){

        $id_penulis   = $request->id;
        $id_penulis   = Crypt::decrypt($id_penulis);
        $nama         = $request->nama;
        $username     = $request->username;
        $password     = $request->password;
        if ($password == null ){
            $data   = [
                'nickname' => $nama,
                'username' =>$username
            ];
        }else {
        $data       = [
            'nickname'    => $nama,
            'username'    =>$username,
            'password'    =>$password
        ];}

        $update = Penulis::where('id_penulis', $id_penulis)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Diubah']);
        }
        
    }

    public function status($id_penulis){

        $id_penulis   = Crypt::decrypt($id_penulis);
        $penulis      = Penulis::where('id_penulis', $id_penulis)->first();

        $status     = $penulis->status;

        if($status == 0){
            $data = [
                'status' => '1'
            ];
        }else{
            $data = [
                'status' => '0'
            ];
        }

        $update = Penulis::where('id_penulis',$id_penulis)->update($data);

        if ($update) {
            return Redirect::back()->with(['success' => 'Status Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Status Data Gagal Diubah']);
        }
    }

    public function hapus($id_penulis){

        $id_penulis = Crypt::decrypt($id_penulis);

        $delete = Penulis::where('id_penulis',$id_penulis)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

}

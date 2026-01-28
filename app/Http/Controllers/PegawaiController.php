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
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Seksi;

class PegawaiController extends Controller
{

    public function view($slug){

        $headers = Header::all();

        $footer  = Footer::all();

        $sub     = Seksi::where('slug', $slug)->first();

        $pegawai = $sub->pegawai()->where('status', '1')->get();


        return view('website.pegawai.view', compact('headers', 'footer', 'pegawai', 'sub'));
    }


    public function data(){

        $pegawai = Pegawai::all();
        $jabatan = Jabatan::all();
        $seksi   = Seksi::all();

        return view('manager.pegawai.view', compact('pegawai', 'jabatan', 'seksi'));
    }

    public function store(Request $request){

        $id_pegawai = Pegawai::latest('id_pegawai')->first();

        $kodeobjek ="asn-";

        if($id_pegawai == null){
            $nomorurut = "001";
        }else{
            $nomorurut = substr($id_pegawai->id_pegawai, 4, 3) + 1;
            $nomorurut = str_pad($nomorurut, 3, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $pegawai = $request->pegawai;
        $nip     = $request->nip;
        $golongan= $request->golongan;
        $jabatan = $request->jabatan;
        $seksi   = $request->seksi;
        if ($request->hasFile('image')) {

        $jabatan = Crypt::decrypt($jabatan);
        $seksi   = Crypt::decrypt($seksi);


        $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $nomorurut.'-'.$pegawai . '.' . $extension;
            $image->move(public_path('assets/images/pegawai'), $imageName);

        $data = [
            'id_pegawai'  => $id,
            'nama'        => $pegawai,
            'nip'         => $nip,
            'golongan'    => $golongan,
            'id_jabatan'  => $jabatan,
            'id_seksi'    => $seksi,
            'foto'        => $imageName,
            'status'      => '1'
        ];
         } else {
            $data = [
                'id_pegawai'  => $id,
                'nama'        => $pegawai,
                'nip'         => $nip,
                'golongan'    => $golongan,
                'id_jabatan'  => $jabatan,
                'id_seksi'    => $seksi,
                'status'      => '1'
            ];
        }

        $simpan = Pegawai::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }
    }

    public function edit(Request $request){

        $id_pegawai = $request->id_pegawai;
        $id_pegawai = Crypt::decrypt($id_pegawai);

        $pegawai    = Pegawai::where('id_pegawai', $id_pegawai)->first();
        $jabatan    = Jabatan::all();
        $seksi      = Seksi::all();

        return view('manager.pegawai.edit', compact('pegawai', 'jabatan', 'seksi'));
        
    }

    public function update(Request $request){

        $id_pegawai   = $request->id;
        $id_pegawai   = Crypt::decrypt($id_pegawai);
        $namafoto     = Pegawai::where('id_pegawai', $id_pegawai)->value('foto');

        $pegawai = $request->pegawai;
        $nip     = $request->nip;
        $golongan= $request->golongan;
        $jabatan = $request->jabatan;
        $seksi   = $request->seksi;
        if ($request->hasFile('image')) {

        $jabatan = Crypt::decrypt($jabatan);
        $seksi   = Crypt::decrypt($seksi);
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $namafoto;
            $image->move(public_path('assets/images/pegawai'), $imageName);
            $data = [
                'nama'        => $pegawai,
                'nip'         => $nip,
                'golongan'    => $golongan,
                'id_jabatan'  => $jabatan,
                'id_seksi'    => $seksi,
                'foto'        => $imageName,
                'status'      => '1'
            ];
        } else {
            $jabatan = Crypt::decrypt($jabatan);
            $seksi   = Crypt::decrypt($seksi);
            $data = [
                'nama'        => $pegawai,
                'nip'         => $nip,
                'golongan'    => $golongan,
                'id_jabatan'  => $jabatan,
                'id_seksi'    => $seksi,
                'status'      => '1'
            ];
        }

        $update = Pegawai::where('id_pegawai', $id_pegawai)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }

    public function status($id_pegawai){

        $id_pegawai   = Crypt::decrypt($id_pegawai);
        $pegawai      = Pegawai::where('id_pegawai', $id_pegawai)->first();

        $status       = $pegawai->status;

        if($status == 0){
            $data = [
                'status' => '1'
            ];
        }else{
            $data = [
                'status' => '0'
            ];
        }

        $update = Pegawai::where('id_pegawai',$id_pegawai)->update($data);

        if ($update) {
            return Redirect::back()->with(['success' => 'Status Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Status Data Gagal Diubah']);
        }
    }

    public function hapus($id_pegawai){

        $id_pegawai = Crypt::decrypt($id_pegawai);

        $delete = Pegawai::where('id_pegawai',$id_pegawai)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }


}

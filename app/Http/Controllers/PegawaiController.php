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
            $nomorurut = substr($id_pegawai->id_pegawai, 3, 3) + 1;
            $nomorurut = str_pad($nomorurut, 3, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $pegawai = $request->pegawai;
        $nip     = $request->nip;
        $golongan= $request->golongan;
        $jabatan = $request->jabatan;
        $seksi   = $request->seksi;

        $data = [
            'id_pegawai'  => $id,
            'nama'        => $pegawai,
            'nip'         => $nip,
            'golongan'    => $golongan,
            'id_jabatan'  => $jabatan,
            'id_seksi'    => $seksi,
            'status'      => '1'
        ];

        $simpan = Pegawai::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }

    }


}

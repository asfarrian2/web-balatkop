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
use App\Models\Seksi;

use function Ramsey\Uuid\v1;

class SeksiController extends Controller
{
    public function view() {

        $seksi = Seksi::all();

        return view('manager.seksi.view', compact('seksi'));
    }

    public function store(Request $request){

         $id_seksi = Seksi::latest('id_seksi')->first();

        $kodeobjek ="se-";

        if($id_seksi == null){
            $nomorurut = "01";
        }else{
            $nomorurut = substr($id_seksi->id_seksi, 3, 2) + 1;
            $nomorurut = str_pad($nomorurut, 2, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $seksi = $request->nama;

        $data = [
            'id_seksi'  => $id,
            'seksi'     => $seksi,
            'status'    => '1'
        ];
        $simpan = Seksi::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }

    }

    public function edit(Request $request){

        $id_seksi = $request->id_seksi;
        $id_seksi = Crypt::decrypt($id_seksi);

        $seksi = Seksi::where('id_seksi', $id_seksi)->first();

        return view('manager.seksi.edit', compact('seksi'));
        
    }

    public function update(Request $request){

        $id_seksi   = $request->id;
        $id_seksi   = Crypt::decrypt($id_seksi);
        $nama       = $request->nama;

        $data       = [
            'seksi'     => $nama
        ];

        $update = Seksi::where('id_seksi', $id_seksi)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Diubah']);
        }
        
    }

    public function status($id_seksi){

        $id_seksi   = Crypt::decrypt($id_seksi);
        $seksi      = Seksi::where('id_seksi', $id_seksi)->first();

        $status     = $seksi->status;

        if($status == 0){
            $data = [
                'status' => '1'
            ];
        }else{
            $data = [
                'status' => '0'
            ];
        }

        $update = Seksi::where('id_seksi',$id_seksi)->update($data);

        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function hapus($id_seksi){

        $id_seksi = Crypt::decrypt($id_seksi);

        $delete = Seksi::where('id_seksi',$id_seksi)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

}

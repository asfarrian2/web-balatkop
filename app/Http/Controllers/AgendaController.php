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
use App\Models\Agenda;
use App\Models\Kategori;


class AgendaController extends Controller
{

    public function view($id_kategori){

        $headers    = Header::all();

        $footer     = Footer::all();

        $id_kategori= Crypt::decrypt($id_kategori);

        $kat        = Kategori::where('id_kategori', $id_kategori)->first();

        $agenda     = agenda::where('status', '1')->where('id_kategori', $id_kategori)->get();

        return view('website.agenda.view', compact('headers', 'footer', 'agenda', 'sub'));
    }


    public function data(){

        $agenda = agenda::all();
        $kategori   = Kategori::all();

        return view('manager.agenda.view', compact('agenda', 'kategori'));
    }

        public function detail(){

        $agenda = agenda::all();
        $kategori   = Kategori::all();

        return view('manager.agenda.detail', compact('agenda', 'kategori'));
    }

    public function store(Request $request){

        $id_agenda = agenda::latest('id_agenda')->first();

        $kodeobjek ="asn-";

        if($id_agenda == null){
            $nomorurut = "001";
        }else{
            $nomorurut = substr($id_agenda->id_agenda, 4, 3) + 1;
            $nomorurut = str_pad($nomorurut, 3, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        $agenda = $request->agenda;
        $nip     = $request->nip;
        $golongan= $request->golongan;
        $jabatan = $request->jabatan;
        $kategori   = $request->Kategori;
        if ($request->hasFile('image')) {

        $jabatan = Crypt::decrypt($jabatan);
        $kategori   = Crypt::decrypt($kategori);


        $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $nomorurut.'-'.$agenda . '.' . $extension;
            $image->move(public_path('assets/images/agenda'), $imageName);

        $data = [
            'id_agenda'  => $id,
            'nama'        => $agenda,
            'nip'         => $nip,
            'golongan'    => $golongan,
            'id_jabatan'  => $jabatan,
            'id_kategori'    => $kategori,
            'foto'        => $imageName,
            'status'      => '1'
        ];
         } else {
            $data = [
                'id_agenda'  => $id,
                'nama'        => $agenda,
                'nip'         => $nip,
                'golongan'    => $golongan,
                'id_jabatan'  => $jabatan,
                'id_kategori'    => $kategori,
                'status'      => '1'
            ];
        }

        $simpan = agenda::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }
    }

    public function edit(Request $request){

        $id_agenda = $request->id_agenda;
        $id_agenda = Crypt::decrypt($id_agenda);

        $agenda    = agenda::where('id_agenda', $id_agenda)->first();
        $kategori      = Kategori::all();

        return view('manager.agenda.edit', compact('agenda', 'jabatan', 'Kategori'));
        
    }

    public function update(Request $request){

        $id_agenda   = $request->id;
        $id_agenda   = Crypt::decrypt($id_agenda);
        $namafoto     = agenda::where('id_agenda', $id_agenda)->value('foto');

        $agenda = $request->agenda;
        $nip     = $request->nip;
        $golongan= $request->golongan;
        $jabatan = $request->jabatan;
        $kategori   = $request->Kategori;
        if ($request->hasFile('image')) {

        $jabatan = Crypt::decrypt($jabatan);
        $kategori   = Crypt::decrypt($kategori);
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $namafoto;
            $image->move(public_path('assets/images/agenda'), $imageName);
            $data = [
                'nama'        => $agenda,
                'nip'         => $nip,
                'golongan'    => $golongan,
                'id_jabatan'  => $jabatan,
                'id_kategori'    => $kategori,
                'foto'        => $imageName,
                'status'      => '1'
            ];
        } else {
            $jabatan = Crypt::decrypt($jabatan);
            $kategori   = Crypt::decrypt($kategori);
            $data = [
                'nama'        => $agenda,
                'nip'         => $nip,
                'golongan'    => $golongan,
                'id_jabatan'  => $jabatan,
                'id_kategori'    => $kategori,
                'status'      => '1'
            ];
        }

        $update = agenda::where('id_agenda', $id_agenda)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }

    public function status($id_agenda){

        $id_agenda   = Crypt::decrypt($id_agenda);
        $agenda      = agenda::where('id_agenda', $id_agenda)->first();

        $status       = $agenda->status;

        if($status == 0){
            $data = [
                'status' => '1'
            ];
        }else{
            $data = [
                'status' => '0'
            ];
        }

        $update = agenda::where('id_agenda',$id_agenda)->update($data);

        if ($update) {
            return Redirect::back()->with(['success' => 'Status Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Status Data Gagal Diubah']);
        }
    }

    public function hapus($id_agenda){

        $id_agenda = Crypt::decrypt($id_agenda);

        $delete = agenda::where('id_agenda',$id_agenda)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }


}


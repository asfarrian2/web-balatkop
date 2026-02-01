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
use App\Models\Agenda;
use App\Models\Kategori;
use App\Models\Tentang;
use App\Models\Post;


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

    public function read($slug){

        $headers    = Header::all();

        $footer     = Footer::all();

        $tentang    = Tentang::all();

        $agenda     = Agenda::where('slug', $slug)->first();

        $sideagenda = Agenda::where('status', '1')->latest('tgl_awal')->paginate(6);

        return view('website.agenda.detail', compact('headers', 'footer', 'agenda', 'tentang', 'sideagenda'));
    }


    public function data(){

        $agenda     = Agenda::all();
        $kategori   = Kategori::all();

        return view('manager.agenda.view', compact('agenda', 'kategori'));
    }

    public function detail($id_agenda){
        
        $id_agenda = Crypt::decrypt($id_agenda);

        $agenda     = Agenda::where('id_agenda', $id_agenda)->first();
        $kategori   = Kategori::all();

        return view('manager.agenda.detail', compact('agenda', 'kategori'));
    }

    public function store(Request $request){

        $agenda        = $request->judul;
        $deskripsi     = $request->deskripsi;
        $tgl_awal      = $request->tgl_awal;
        $tgl_akhir     = $request->tgl_akhir;
        $tempat        = $request->tempat;
        $alamat        = $request->alamat;
        $dana          = $request->dana;
        $kategori      = $request->kategori;

        $tahun = date('Y', strtotime($tgl_awal));
        $id_agenda = Agenda::whereYear('tgl_awal', $tahun)->latest('id_agenda')->first();

        $kodeobjek ="g".$tahun."-";

        if($id_agenda == null){
            $nomorurut = "001";
        }else{
            $nomorurut = substr($id_agenda->id_agenda, 6, 3) + 1;
            $nomorurut = str_pad($nomorurut, 3, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        if ($request->hasFile('image')) {

        $kategori   = Crypt::decrypt($kategori);


        $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $tahun.$nomorurut.'-jadiklat' . '.' . $extension;
            $image->move(public_path('assets/images/agenda'), $imageName);

        $data = [
            'id_agenda'    => $id,
            'judul'        => $agenda,
            'deskripsi'    => $deskripsi,
            'tgl_awal'     => $tgl_awal,
            'tgl_akhir'    => $tgl_akhir,
            'tempat'       => $tempat,
            'alamat'       => $alamat,
            'sumber_dana'  => $dana,
            'slug'         => Str::slug($agenda.'-'.$tgl_awal.'-'.$tgl_akhir.'-'.$tempat),
            'id_kategori'  => $kategori,
            'thumbail'     => $imageName,
            'status'       => '1'
        ];
         } else {
            $data = [
                'id_agenda'    => $id,
                'judul'        => $agenda,
                'deskripsi'    => $deskripsi,
                'tgl_awal'     => $tgl_awal,
                'tgl_akhir'    => $tgl_akhir,
                'tempat'       => $tempat,
                'alamat'       => $alamat,
                'sumber_dana'  => $dana,
                'slug'         => Str::slug($agenda.'-'.$tgl_awal.'-'.$tgl_akhir.'-'.$tempat),
                'id_kategori'  => $kategori,
                'status'       => '1'
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

        $agenda    = Agenda::where('id_agenda', $id_agenda)->first();
        $kategori  = Kategori::all();

        return view('manager.agenda.edit', compact('agenda', 'kategori'));
        
    }

    public function update(Request $request){

        $id_agenda   = $request->id;
        $id_agenda   = Crypt::decrypt($id_agenda);
        $namafoto    = agenda::where('id_agenda', $id_agenda)->value('thumbail');

        $agenda        = $request->judul;
        $deskripsi     = $request->deskripsi;
        $tgl_awal      = $request->tgl_awal;
        $tgl_akhir     = $request->tgl_akhir;
        $tempat        = $request->tempat;
        $alamat        = $request->alamat;
        $dana          = $request->dana;
        $kategori      = $request->kategori;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $namafoto;
            $image->move(public_path('assets/images/agenda'), $imageName);
            $data = [
                'thumbail'         => $imageName
            ];
        } else {
            $kategori   = Crypt::decrypt($kategori);
            $data = [
                'judul'        => $agenda,
                'deskripsi'    => $deskripsi,
                'tgl_awal'     => $tgl_awal,
                'tgl_akhir'    => $tgl_akhir,
                'tempat'       => $tempat,
                'alamat'       => $alamat,
                'sumber_dana'  => $dana,
                'slug'         => Str::slug($agenda.'-'.$tgl_awal.'-'.$tgl_akhir.'-'.$tempat),
                'id_kategori'  => $kategori
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


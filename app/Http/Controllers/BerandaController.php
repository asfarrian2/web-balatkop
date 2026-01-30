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
use App\Models\Agenda;
use App\Models\Post;
use App\Models\Layanan;
use App\Models\Footer;

class BerandaController extends Controller
{

    //--*-------Admin Beranda--*-------//
    public function data(){

        $bp = Beranda::where('jenis', 'Banner Primary')->get();

        $bs = Beranda::where('jenis', 'Banner Secondary')->get();

        $br = Beranda::where('jenis', 'Brand')->get();

        $tentang = Beranda::where('jenis', 'Tentang')->get();

        $card = Beranda::where('jenis', 'card')->get();

        $agenda = Beranda::where('jenis', 'Agenda')->get();

        return view('manager.beranda.view', compact('bp', 'bs', 'br', 'tentang', 'card', 'agenda'));

    }

    public function edit(Request $request){

        $id_beranda = $request->id_beranda;
        $id_beranda = Crypt::decrypt($id_beranda);

        $beranda = Beranda::where('id_beranda', $id_beranda)->first();

        if($beranda->status == 'Text') {
            return view('manager.beranda.edit', compact('beranda'));
        }else{
            return view('manager.beranda.upload', compact('beranda'));
        }

    }

    public function update(Request $request){

        $id_beranda   = $request->id;
        $id_beranda   = Crypt::decrypt($id_beranda);
        $caption      = $request->caption;
        $keterangan   = $request->keterangan;
        $link         = $request->link;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $id_beranda . '.' . $extension;
            $image->move(public_path('assets/images/beranda'), $imageName);
            $data = [
                'keterangan_1' => $imageName,
                'keterangan_2' => $keterangan,
                'link' => $link,
            ];
        } else {
            $data = [
                'keterangan_1' => $caption,
                'keterangan_2' => $keterangan,
                'link' => $link,
            ];
        }

        $update = beranda::where('id_beranda', $id_beranda)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }

    }


    //Visitor Beranda
    public function view(){

        $headers = Header::all();

        $beranda = Beranda::all();

        $agenda  = Agenda::all();

        $footer  = Footer::all();

        $post = Post::where('status', '1')->latest()->take(3)->get(); 

        return view('website.beranda.view', compact('headers', 'post', 'beranda', 'agenda', 'footer'));

    }

}

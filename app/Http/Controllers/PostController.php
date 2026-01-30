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
use App\Models\Post;
use App\Models\Kategori;
use App\Models\Galeri;
use App\Models\Hastag;

class PostController extends Controller
{

    public function view($id_kategori){

        $headers    = Header::all();

        $footer     = Footer::all();

        $id_kategori= Crypt::decrypt($id_kategori);

        $post       = Post::where('status', '1')->where('id_kategori', $id_kategori)->get();

        return view('website.post.view', compact('headers', 'footer', 'post'));
    }


    public function data(){

        $post       = Post::orderBy('id_post', 'desc')->where('jenis', '1')->get();
        $kategori   = Kategori::all();

        return view('manager.post.view', compact('post', 'kategori'));
    }

    public function detail($id_post){
        
        $id_post   = Crypt::decrypt($id_post);

        $post      = Post::where('id_post', $id_post)->first();
        $kategori  = Kategori::all();

        return view('manager.post.detail', compact('post', 'kategori'));
    }

    public function store(Request $request){

        $judul         = $request->judul;
        $penulis       = $request->penulis;
        $tanggal       = date('Y-m-d');
        $kategori      = $request->kategori;
        $slug          = Str::slug($judul.'-'.$tanggal);
        $kategori      = $request->kategori;

        $tahun = date('Y', strtotime($tanggal));
        $id_post = Post::whereYear('created_at', $tahun)->latest('id_post')->first();

        $kodeobjek =$tahun."ip-";

        if($id_post == null){
            $nomorurut = "001";
        }else{
            $nomorurut = substr($id_post->id_post, 7, 3) + 1;
            $nomorurut = str_pad($nomorurut, 3, "0", STR_PAD_LEFT);
        }
        $id=$kodeobjek.$nomorurut;

        if ($request->hasFile('image')) {

        $kategori   = Crypt::decrypt($kategori);


        $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $tahun.$nomorurut.'-imgpost' . '.' . $extension;
            $image->move(public_path('assets/images/postingan'), $imageName);

        $data = [
            'id_post'      => $id,
            'judul'        => $judul,
            'konten'       => 'Konten Belum Ada',
            'slug'         => $slug,
            'penulis'      => $penulis,
            'id_kategori'  => $kategori,
            'thumbail'     => $imageName,
            'jenis'        => '1',
            'views_count'  => '0',
            'status'       => '0'
        ];
         } else {
            $data = [
                'id_post'      => $id,
                'judul'        => $judul,
                'konten'       => 'Konten Belum Ada',
                'slug'         => $slug,
                'penulis'      => $penulis,
                'id_kategori'  => $kategori,
                'jenis'        => '1',
                'views_count'  => '0',
                'status'       => '0'
            ];
        }

        $simpan = Post::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }
    }

    public function edit(Request $request){

        $id_post = $request->id_post;
        $id_post = Crypt::decrypt($id_post);

        $post    = Post::where('id_post', $id_post)->first();
        $kategori= Kategori::all();
        $galeri  = Galeri::where('id_post', $id_post)->get();
        $hastag  = Hastag::where('id_post', $id_post)->get();

        return view('manager.post.edit', compact('post', 'kategori', 'galeri', 'hastag'));
        
    }

    public function konten(Request $request){

        $id_post   = $request->id;
        $id_post   = Crypt::decrypt($id_post);

        $konten    = $request->konten;

        $data = [
            'konten' => $konten
        ];

        $update = Post::where('id_post', $id_post)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }

    public function update(Request $request){

        $id_post   = $request->id;
        $id_post   = Crypt::decrypt($id_post);
        $namafoto  = Post::where('id_post', $id_post)->value('thumbail');

        $post        = $request->judul;
        $penulis     = $request->penulis;
        $kategori    = $request->kategori;
        $tanggal     = Post::where('id_post', $id_post)->value('created_at')->toDateString();;
        $slug        = Str::slug($post.'-'.$tanggal);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $imageName = $namafoto;
            $image->move(public_path('assets/images/postingan'), $imageName);
            $data = [
                'thumbail'         => $imageName
            ];
        } else {
            $kategori   = Crypt::decrypt($kategori);
            $data = [
                'judul'        => $post,
                'penulis'      => $penulis,
                'slug'         => $slug,
                'id_kategori'  => $kategori
            ];
        }

        $update = Post::where('id_post', $id_post)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }

    public function status($id_post){

        $id_post   = Crypt::decrypt($id_post);
        $post      = Post::where('id_post', $id_post)->first();

        $status       = $post->status;

        if($status == 0){
            $data = [
                'status' => '1'
            ];
        }else{
            $data = [
                'status' => '0'
            ];
        }

        $update = Post::where('id_post',$id_post)->update($data);

        if ($update) {
            return Redirect::back()->with(['success' => 'Konten Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Status Data Gagal Diubah']);
        }
    }

    public function hapus($id_post){

        $id_post = Crypt::decrypt($id_post);

        $delete = Post::where('id_post',$id_post)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function add_galeri(Request $request){
    $id_post = $request->id;
    $id_post = Crypt::decrypt($id_post);

    // Pengecekan jumlah data galeri yang sudah ada
    $jumlahGaleri = Galeri::where('id_post', $id_post)->count();
    if ($jumlahGaleri >= 6) {
        return Redirect::back()->with(['warning' => 'Maksimal 6 gambar untuk postingan ini.']);
    }

    $tanggal = date('Y-m-d');
    $tahun = date('Y', strtotime($tanggal));
    $id_galeri = Galeri::whereYear('created_at', $tahun)->latest('id_galeri')->first();
    $kodeobjek =$tahun."gl-";
    if($id_galeri == null){
        $nomorurut = "00001";
    }else{
        $nomorurut = substr($id_galeri->id_galeri, 7, 5) + 1;
        $nomorurut = str_pad($nomorurut, 5, "0", STR_PAD_LEFT);
    }
    $id=$kodeobjek.$nomorurut;
    $image = $request->file('image');
    $extension = $image->getClientOriginalExtension();
    $imageName = $tahun.$nomorurut.'-galeripost' . '.' . $extension;
    $image->move(public_path('assets/images/galeri'), $imageName);
    $data = [
        'id_galeri'=> $id,
        'id_post' => $id_post,
        'gambar' => $imageName,
    ];
        $simpan = Galeri::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }
    }

    public function update_galeri(Request $request){

        $id_galeri   = $request->id;
        $id_galeri   = Crypt::decrypt($id_galeri);

        $image       = $request->file('image');
        $imageName   = Galeri::where('id_galeri', $id_galeri)->value('gambar');

        $image->move(public_path('assets/images/galeri'), $imageName);

        $data = [
            'gambar'   => $imageName,
        ];

        $update = Galeri::where('id_galeri', $id_galeri)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
    }

    public function delete_galeri($id_galeri){

        $id_galeri = Crypt::decrypt($id_galeri);

        $galeri = Galeri::where('id_galeri', $id_galeri)->first();
        if ($galeri) {
            $imagePath = public_path('assets/images/galeri/' . $galeri->gambar);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
             $delete    = Galeri::where('id_galeri',$id_galeri)->delete();
            if ($delete) {
                return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
            } else {
                return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
            }
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Ditemukan']);
        }
    }

    public function add_hastag(Request $request){
    $id_post = $request->idpost;
    $id_post = Crypt::decrypt($id_post);
    $hastag = $request->hastag;

    $tanggal = date('Y-m-d');
    $tahun = date('Y', strtotime($tanggal));
    $id_hastag = Hastag::whereYear('created_at', $tahun)->latest('id_hastag')->first();
    $kodeobjek =$tahun."ht-";
    if($id_hastag == null){
        $nomorurut = "00001";
    }else{
        $nomorurut = substr($id_hastag->id_hastag, 7, 5) + 1;
        $nomorurut = str_pad($nomorurut, 5, "0", STR_PAD_LEFT);
    }
    $id=$kodeobjek.$nomorurut;
   
    $data = [
        'id_hastag' => $id,
        'id_post'  => $id_post,
        'hastag' => $hastag,
    ];
        
    $simpan = Hastag::create($data);
        if ($simpan) {
            return Redirect::back()->with(['success' => 'Data Berhasil Disimpan.']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Disimpan.']);
        }
    }

     public function delete_hastag($id_hastag){

        $id_hastag = Crypt::decrypt($id_hastag);

        $delete = Hastag::where('id_hastag',$id_hastag)->delete();

        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }


}



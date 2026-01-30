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
use App\Models\Tentang;
use App\Models\Kategori;
use App\Models\Galeri;
use App\Models\Hastag;

class ArtikelController extends Controller
{
    public function artikel(){

        $headers    = Header::all();

        $footer     = Footer::all();

        $tentang    = Tentang::all();

        $hastag = Hastag::select('hastag', DB::raw('count(*) as total'))
                  ->groupBy('hastag')
                  ->orderBy('total', 'desc')
                  ->take(7)
                  ->get();

        $kategori   = Kategori::withCount('posts')->get();

        $sideberita = Post::where('status', '1')->where('jenis', '1')->latest('created_at')->paginate(3);

        $sideinfotips = Post::where('status', '1')->where('jenis', '2')->latest('created_at')->paginate(3);

        $post = Post::where('status', '1')->latest('created_at')->paginate(3);


        return view('website.artikel.view', compact('post', 'headers', 'footer', 'hastag', 'sideberita', 'tentang', 'kategori', 'sideinfotips'));
    }

    public function berita(){

        $headers    = Header::all();

        $footer     = Footer::all();

        $tentang    = Tentang::all();

        $hastag = Hastag::select('hastag', DB::raw('count(*) as total'))
                  ->groupBy('hastag')
                  ->orderBy('total', 'desc')
                  ->take(7)
                  ->get();

        $kategori   = Kategori::withCount('posts')->get();

        $sideberita = Post::where('status', '1')->where('jenis', '1')->latest('created_at')->paginate(3);

        $sideinfotips = Post::where('status', '1')->where('jenis', '2')->latest('created_at')->paginate(3);

        $post = Post::where('status', '1')->where('jenis', '1')->latest('created_at')->paginate(3);


        return view('website.artikel.view', compact('post', 'headers', 'footer', 'hastag', 'sideberita', 'tentang', 'kategori', 'sideinfotips'));
    }

    public function infotips(){

        $headers    = Header::all();

        $footer     = Footer::all();

        $tentang    = Tentang::all();

        $hastag     = Hastag::all();

        $kategori   = Kategori::withCount('posts')->get();

        $sideberita = Post::where('status', '1')->where('jenis', '1')->latest('created_at')->paginate(3);

        $sideinfotips = Post::where('status', '1')->where('jenis', '2')->latest('created_at')->paginate(3);

        $post = Post::where('status', '1')->where('jenis', '2')->latest('created_at')->paginate(3);


        return view('website.artikel.view', compact('post', 'headers', 'footer', 'hastag', 'sideberita', 'tentang', 'kategori', 'sideinfotips'));
    }

    public function read($slug) {

        $headers    = Header::all();

        $footer     = Footer::all();

        $tentang    = Tentang::all();

        $hastag = Hastag::select('hastag', DB::raw('count(*) as total'))
                  ->groupBy('hastag')
                  ->orderBy('total', 'desc')
                  ->take(7)
                  ->get();

        $kategori   = Kategori::withCount('posts')->get();

        $sideberita = Post::where('status', '1')->where('jenis', '1')->latest('created_at')->paginate(3);

        $sideinfotips = Post::where('status', '1')->where('jenis', '2')->latest('created_at')->paginate(3);

        $post = Post::where('slug', $slug)->first();

        $tag = Hastag::where('id_post', $post->id_post)->get();

        $galeri = Galeri::where('id_post', $post->id_post)->get();


        return view('website.artikel.detail', compact('post', 'headers', 'footer', 'tentang', 'hastag', 'kategori', 'sideberita', 'sideinfotips', 'tag', 'galeri'));
    }

}

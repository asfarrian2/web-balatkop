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
    public function view(){

        $headers    = Header::all();

        $footer     = Footer::all();

        $tentang    = Tentang::all();

        $hastag     = Hastag::all();

        $kategori   = Kategori::withCount('posts')->get();

        $sideartikel    = Post::where('status', '1')->get();

        return view('website.artikel.view', compact('headers', 'footer', 'hastag', 'sideartikel', 'tentang', 'kategori'));
    }
}

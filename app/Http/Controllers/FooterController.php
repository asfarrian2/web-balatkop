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
use App\Models\Footer;

class FooterController extends Controller
{
    public function view() {

        $footer = Footer::all();

        return view('manager.footer.view', compact('footer'));
    }

    public function edit(Request $request){

        $id_footer = $request->id_footer;
        $id_footer = Crypt::decrypt($id_footer);

        $footer = Footer::where('id_footer', $id_footer)->first();

        if($footer->status == 'text') {
            return view('manager.footer.edit', compact('footer'));
        }else{
            return view('manager.footer.upload', compact('footer'));
        }
        
    }

    public function update(Request $request){

        $id_footer   = $request->id;
        $id_footer   = Crypt::decrypt($id_footer);
        $keterangan  = $request->input('keterangan');
        $link        = $request->link;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $id_footer . '.' . $extension;
            $image->move(public_path('assets/images/footer'), $imageName);
            $data = [
                'keterangan' => $imageName,
                'link' => $link,
            ];
        } else {
            $data = [
                'keterangan' => $keterangan,
                'link' => $link,
            ];
        }

        $update = Footer::where('id_footer', $id_footer)->update($data);
        if ($update) {
            return Redirect::back()->with(['success' => 'Data Berhasil Diubah']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Tidak Berhasil Diubah']);
        }
        
    }

}

<?php

namespace App\Http\Controllers\user;

use App\User;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index()
    {
        return view("user.toko");
    }


    public function daftartoko(Request $request)
    {
        $validate = $request->validate([

            'nama' => 'required|string|unique:stores|max:25',
            'alamat' => 'required|string'
        ]);
        // dd($validate);

        Store::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'user_id' => Auth::user()->id
        ]);

        $user = User::find(Auth::user()->id);
        $user->is_seller = 1;
        $user->save();

        return redirect('toko')->with("status", "Selamat Kamu Berhasil Membuka Tokomu!");
    }

    public function edit_toko()
    {
        $toko = Auth::user()->store;

        return view("user.seller.edit_toko", compact('toko'));
    }

    public function edit_tokoAction(Request $request)
    {
        $toko = Store::find(Auth::user()->store->id);


        if ($request->has('foto')) {
            $foto_toko = $request->file('foto')->store('foto_toko', 'public');;
        } else {
            $foto_toko = $toko->foto;
        }

        $toko->nama = $request->nama;
        $toko->alamat = $request->alamat;
        $toko->foto = $foto_toko;
        $toko->save();

        return redirect('toko')->with("status", "Selamat Kamu Berhasil Mengubah Tokomu!");
    }
}

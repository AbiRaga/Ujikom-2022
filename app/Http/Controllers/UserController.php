<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\diteltransaksi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){

        $data = produk::all();
        return view('welcome' ,compact('data'));
    }

    public function detail(Request $request, produk $produk){
        return view('main',compact('produk'));
    }
    public function login(){
        return view('login');
    }
    public function postLogin(Request $request){
        $cek = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($cek)){
            $user = Auth::user();
            return redirect()->route('home')->with('status','Selamat datang : '.$user->name);
        }
        return back()->with('status','Email atau password salah');
    }
    public function logout(){
        auth()->logout();

        return redirect()->route('home');
    }

    public function postkeranjang(Request $request, produk $produk){
        $request->validate([
            'banyak'=>'required',
        ]);
        
        diteltransaksi::create([
            'qty'=>$request->banyak,
            'user_id'=>Auth::id(),
            'produk_id'=>$produk->id,
            'status'=>'keranjang',
            'totalharga'=>$produk->harga * $request->banyak,
        ]);
        return redirect()->route('pelanggan.keranjang')->with('status','dimasukan kedalam keranjang');
    }
    public function keranjang(Request $request){
        $diteltransaksi=diteltransaksi::where('status','keranjang')->with('produk')->get();

        return view('keranjang',compact('diteltransaksi'));
    }
}

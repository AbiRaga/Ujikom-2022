<?php

namespace App\Http\Controllers;

use App\Models\produk;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){

        $data = produk::all();
        return view('welcome' ,compact('data'));
    }
}

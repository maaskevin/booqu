<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
class BerandaController extends Controller
{
    //
    public function home(){
        $index =Books::orderBy('id','asc')->take(5)->get();
        return view('v_beranda.beranda',[
            'index'=>$index
        ]);
    }
    public function book(){
        $index = Books::orderBy('id','asc')->get();
        return view('v_book.book',[
            'index'=>$index
        ]);
    }
    public function favorite(){
        return view('v_favorite.favorite');
    }
    public function profile(){
        return view('v_profile.profile');
    }
    public function checkout(){
        return view('v_checkout.checkout');
    }
}

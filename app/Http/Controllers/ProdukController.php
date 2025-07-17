<?php

namespace App\Http\Controllers;
use NumberFormatter;
use Illuminate\Http\Request;
use App\Models\Books;
class ProdukController extends Controller
{
    //
    public function show($slug){
        $produk = Books::where('slug', $slug)->firstOrFail();

         $similar = Books::where('kategori', $produk->kategori)
                    ->where('id', '!=', $produk->id)
                    ->limit(5)
                    ->get();

        return view('v_detail.detail', [
        'index' => $produk,
        'harga'=>$produk->harga,
        'similar'=>$similar
        ]);
    }
    
}

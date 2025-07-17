<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Books;
class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $index = Cart::with('cartBook')->orderBy('id','asc')->get();
        
        $total = $index->sum(function ($item) {
            return $item->jumlah * $item->cartBook->harga;
        });

        return view('v_keranjang.keranjang', [
            'index' => $index,
            'total'=>$total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $userId = Auth::id();
        $bookId = $request->book_id;

        // Cek apakah buku sudah ada di keranjang user
        $cart = Cart::where('user_id', $userId)
                    ->where('book_id', $bookId)
                    ->first();

        if ($cart) {
            // Sudah ada, tambahkan jumlahnya
            $cart->jumlah += 1;
            $cart->save();
        } else {
            // Belum ada, buat baru
            Cart::create([
                'user_id' => $userId,
                'book_id' => $bookId,
                'jumlah' => 1
            ]);
        }

        return back()->with('success', 'Buku ditambahkan ke keranjang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Cart::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Item berhasil dihapus dari keranjang');
    }
    public function tambahJumlah($id){
        $item = Cart::findOrFail($id);
        $item->jumlah +=1;
        $item->save();
        return back();

    }
    public function kurangJumlah($id){
        $item =Cart::findOrFail($id);
        if($item->jumlah >= 1){
            $item->jumlah -=1;
            $item->save();

        }
        else{
            $item->delete();
        }
        return back();
    }
    public function confirmKeranjang(){
        return view('v_confirm_keranjang.confirmKeranjang');
    }

    public function reset(){
    Cart::where('user_id', Auth::id())->delete();
    return response()->json(['status' => 'deleted']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Books;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $index =Favorite::with('favBook')->orderBy('id','asc')->get();

        return view('v_favorite.favorite', [
            'index' => $index,
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
        $favorite = Favorite::where('user_id', $userId)
                    ->where('book_id', $bookId)
                    ->first();

        if (!$favorite) {
            // Sudah ada, tambahkan jumlahnya
            Favorite::create([
                'user_id' => $userId,
                'book_id' => $bookId,
            ]);
        }
        return back()->with('success', 'Buku ditambahkan ke favorite'); 
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
        //
         $item = Favorite::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Item berhasil dihapus dari favorite');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\CoreApi;
use Midtrans\Transaction;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;

class TransaksiController extends Controller
{
    public function bayar()
    {
        $userId = Auth::id();

        // Ambil isi keranjang user
        $keranjang = Cart::with('cartBook')->where('user_id', $userId)->get();
        
        // Hitung total harga
        $total = $keranjang->sum(function ($item) {
            return $item->cartBook->harga * $item->jumlah;
        });

        // Konfigurasi Midtrans
        Config::$serverKey = 'SB-Mid-server-iYvT30b5-lK6RJjzJa5Wq3Gw'; // GANTI dengan key kamu
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        if ($total < 1000) {
            return back()->with('error', 'Total terlalu kecil untuk diproses.');
        }

        // Buat transaksi
        $orderId = 'ORDER-' . uniqid();

        $params = [
            'payment_type' => 'qris',
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $total,
            ],
            'qris' => []
        ];

        try {
            $result = CoreApi::charge($params);
            $qris_url = $result->actions[0]->url;

            return view('qris-view', [
                'qris_url' => $qris_url,
                'order_id' => $orderId
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function cekStatus($order_id){
         \Log::info("🔥 MASUK CEK STATUS dengan order_id: $order_id");

        try {
            $status = Transaction::status($order_id);

            if ($status->transaction_status === 'settlement') {
                // Ambil user dari session (bukan dari query)
                $userId = Auth::id();
                Cart::where('user_id', $userId)->delete();

                return redirect()->route('keranjang.index')->with('success', 'Pembayaran berhasil. Keranjang telah dikosongkan.');
            } elseif ($status->transaction_status === 'pending') {
                return back()->with('info', 'Pembayaran masih pending. Silakan cek ulang beberapa saat lagi.');
            } else {
                return back()->with('error', 'Pembayaran gagal atau dibatalkan.');
            }

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengecek status: ' . $e->getMessage());
        }
    }



    public function snap(Request $request){
        $user = Auth::user();
        $keranjang = Cart::with('cartBook')->where('user_id', $user->id)->get();

        $total = $keranjang->sum(function ($item) {
            return $item->cartBook->harga * $item->jumlah;
        });

        if ($total < 1000) {
            return response()->json(['error' => 'Total terlalu kecil']);
        }

        \Midtrans\Config::$serverKey = 'SB-Mid-server-iYvT30b5-lK6RJjzJa5Wq3Gw'; // GANTI dengan server key kamu
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $items = [];
        foreach ($keranjang as $item) {
            $items[] = [
                'id' => $item->cartBook->id,
                'price' => $item->cartBook->harga,
                'quantity' => $item->jumlah,
                'name' => $item->cartBook->judul
            ];
        }
        $orderId = 'ORDER-' . uniqid();
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
            ],
            'item_details' => $items
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json([
                'token' => $snapToken,
                'order_id' =>$orderId,
                'user_id' => $user->id
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }

}

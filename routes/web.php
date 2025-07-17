<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\TransaksiController;

Route::get('/', [BerandaController::class, 'home'])->name('beranda.index');

Route::resource('user', UserController::class);
Route::get('register', [UserController::class, 'create'])->name('register');
Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'loginUser'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logoutUser'])->name('logout');

Route::get('home', [BerandaController::class, 'home'])->name('home');
Route::get('book', [BerandaController::class, 'book'])->name('book');
Route::get('checkout', [BerandaController::class, 'checkout'])->name('checkout');
Route::get('profile', [BerandaController::class, 'profile'])->name('profile');
Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('produk.show');

Route::resource('favorite', FavoriteController::class)->only(['store', 'index'])->middleware('auth');

Route::resource('keranjang', KeranjangController::class)->only(['index', 'store', 'destroy'])->middleware(['auth']);
Route::put('/keranjang/tambah/{id}', [KeranjangController::class, 'tambahJumlah'])->name('keranjang.tambah');
Route::put('/keranjang/kurang/{id}', [KeranjangController::class, 'kurangJumlah'])->name('keranjang.kurang');
Route::get('/confirm-keranjang', [KeranjangController::class, 'confirmKeranjang'])->middleware('auth');

Route::get('/bayar', [TransaksiController::class, 'bayar'])->name('bayar');
Route::get('/bayar/cek/{order_id}', [TransaksiController::class, 'cekStatus'])->name('bayar.cek');
Route::post('/bayar-snap', [TransaksiController::class, 'snap'])->name('bayar.snap');

Route::delete('/keranjang/reset', [KeranjangController::class, 'reset'])->name('keranjang.reset');

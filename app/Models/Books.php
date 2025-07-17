<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'Buku_DB';
    protected $fillable =[
        'judul',
        'penulis',
        'harga',
        'jumlah stok',
        'cover',
        'kategori',//hiburan , agama , dll
        'deskripsi'
    ];
    use HasFactory;
}

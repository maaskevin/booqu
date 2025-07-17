<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Books;
class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
    'user_id',
    'book_id',
    'jumlah',
    ];
    public function cartUser(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cartBook(){
        return $this->belongsTo(Books::class, 'book_id');
    }
}

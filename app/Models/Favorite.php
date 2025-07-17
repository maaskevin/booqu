<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $table = 'favorite';
    protected $fillable = [
    'user_id',
    'book_id',
    ];
    public function favUser(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favBook(){
        return $this->belongsTo(Books::class, 'book_id');
    }
}

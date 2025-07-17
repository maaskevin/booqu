<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Books;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku_DB', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul')->unique();
            $table->string('penulis');
            $table->integer('harga');
            $table->integer('jumlah stok');
            $table->text('deskripsi');
            $table->string('cover');
            $table->string('kategori'); // misal 1 untuk agama, 2 hiburan,3 dll
            $table->string('slug')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_DB');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_buku', 50);
            $table->string('judul_buku', 40);
            $table->string('tahun_terbit', 40);
            $table->string('penulis', 100);
            $table->string('stok_buku', 20);
            $table->unsignedBigInteger('kategori');
            $table->timestamps();

        });

        Schema::table('table_buku', function (Blueprint $table) {
            $table->foreign('kategori')->references('id')->on('table_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_buku');
    }
}

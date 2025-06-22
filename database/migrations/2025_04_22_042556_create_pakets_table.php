<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('nama_penerima');
            $table->text('nomor_resi')->nullable();
            $table->enum('ekspedisi', ['JNE','JNT','TIKI','POS','SHOPEE','GRAB']);
            $table->date('tanggal_pemesanan');
            $table->text('e_commerce');
            $table->double('berat_barang');
            $table->enum('status', ['dikirim', 'diterima'])->default('dikirim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pakets');
    }
}
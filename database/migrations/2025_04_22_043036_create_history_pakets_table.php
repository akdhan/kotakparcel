<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('history_pakets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paket');
            $table->timestamp('tanggal_paket_diterima')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('history_pakets');
    }
};

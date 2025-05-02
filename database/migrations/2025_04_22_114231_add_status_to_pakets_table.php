<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('pakets', function (Blueprint $table) {
        $table->enum('status', ['dikirim', 'diterima'])->default('dikirim')->after('berat_barang');
    });
}

public function down()
{
    Schema::table('pakets', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}};

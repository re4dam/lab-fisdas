<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('panduan_penggunaan', function (Blueprint $table) {
            $table->id('id_pand_penggunaan');
            $table->foreignId('id_barang')->constrained('barang', 'id_barang')->onDelete('cascade');
            $table->string('tahap_penggunaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panduan_penggunaan');
    }
};

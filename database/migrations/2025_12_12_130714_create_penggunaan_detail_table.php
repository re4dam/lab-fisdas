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
        Schema::create('penggunaan_detail', function (Blueprint $table) {
            $table->id('id_penggunaan_detail');
            $table->foreignId('id_pand_penggunaan')->constrained('panduan_penggunaan', 'id_pand_penggunaan')->onDelete('cascade');
            $table->text('deskripsi_penggunaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunaan_detail');
    }
};

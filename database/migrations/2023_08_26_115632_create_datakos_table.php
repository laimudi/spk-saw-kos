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
        Schema::create('datakos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kos', 200);
            $table->string('alamat', 200);
            $table->string('jarak', 200);
            $table->string('jenis', 200);
            $table->string('harga', 200);
            // $table->string('latitude', 200);
            // $table->string('longitude', 200);
            $table->string('gambar', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakos');
    }
};

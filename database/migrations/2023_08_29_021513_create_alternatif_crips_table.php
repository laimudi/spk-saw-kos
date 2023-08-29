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
        Schema::create('alternatif_crips', function (Blueprint $table) {
            $table->id();
            // disini 2 cara, bisa langsung get crips_id jadi ketika crips d ubah nilainya, disini pun akan terubah otomatis
            $table->foreignId('crips_id')->constrained()->onDelete('cascade');
            // tapi jika ingin menggunakan cara manual bisa pakai jadi nilai akan tetap konstant.
            // $table->string('nilai);
            // datakos sebagai alternatifnya
            $table->foreignId('datakos_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatif_crips');
    }
};

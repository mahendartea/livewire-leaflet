<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ruas_jalan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jalan_id')->constrained('jalan')->nullable();
            $table->string('kode_ruas')->nullable();
            $table->string('nama_ruas')->nullable();
            $table->decimal('panjang_ruas', 10, 2)->nullable();
            $table->foreignId('kondisi_id')->constrained('kondisi');
            $table->year('tahun')->nullable();
            $table->text('polyline')->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignId('created_by')->constrained('users')->nullable();
            $table->foreignId('updated_by')->constrained('users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruas_jalan');
    }
};

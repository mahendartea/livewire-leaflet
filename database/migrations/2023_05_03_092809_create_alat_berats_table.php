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
        Schema::create('alat_berat', function (Blueprint $table) {
            $table->id();
            //kode, nama, tahun, koordinat, keterangan, created_by, updated_by, tipe_alat_berat_id, status_alat_berat_id
            $table->string('kode');
            $table->string('nama');
            $table->string('tahun');
            $table->string('koordinat');
            $table->text('keterangan')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('tipe_alat_berat_id')->nullable()->constrained('tipe_alat_berat');
            $table->foreignId('status_alat_berat_id')->nullable()->constrained('status_alat_berat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_berat');
    }
};

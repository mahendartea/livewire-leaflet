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
        Schema::create('histori_alat_berat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alat_berat_id')->nullable()->constrained('alat_berat');
            $table->string('koordinat');
            $table->date('tanggal');
            $table->text('keterangan')->nullable();
            $table->foreignId('status_alat_berat_id')->nullable()->constrained('status_alat_berat');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histori_alat_berat');
    }
};

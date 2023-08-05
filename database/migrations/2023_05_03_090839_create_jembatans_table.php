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
        Schema::create('jembatan', function (Blueprint $table) {
            $table->id();
            //kode
            $table->string('kode')->unique();
            $table->string('nama');
            $table->double('panjang');
            $table->foreignId('kondisi_id')->constrained('kondisi');
            $table->year('tahun');
            $table->string('koordinat');
            $table->text('keterangan')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jembatan');
    }
};

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
        Schema::create('histori_jembatan', function (Blueprint $table) {
            $table->id();
            //jembatan_id, koordinat, tanggal, ketarangan, kondisi_id, created_by, updated_by
            $table->foreignId('jembatan_id')->constrained('jembatan');
            $table->string('koordinat');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->foreignId('kondisi_id')->constrained('kondisi');
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
        Schema::dropIfExists('histori_jembatan');
    }
};

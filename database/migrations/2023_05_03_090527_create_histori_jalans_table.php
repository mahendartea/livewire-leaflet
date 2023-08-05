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
        Schema::create('histori_jalan', function (Blueprint $table) {
            $table->id();
            //ruas_jalan_id
            $table->foreignId('ruas_jalan_id')->constrained('ruas_jalan');
            //koordinat
            $table->string('koordinat');
            //tanggal
            $table->date('tanggal');
            //keterangan
            $table->string('keterangan');
            //kondisi_id
            $table->foreignId('kondisi_id')->constrained('kondisi');
            $created_by = $table->unsignedBigInteger('created_by')->nullable();
            $updated_by = $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histori_jalan');
    }
};

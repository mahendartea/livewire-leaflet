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
        Schema::create('paket_pekerjaan', function (Blueprint $table) {
            $table->id();
            //kode, nama, panjang, tahun, koordinat, ketarnagan, created_by,updated_by, type(enum), refrence_id
            $table->string('kode')->unique();
            $table->string('nama');
            $table->string('panjang');
            $table->string('tahun');
            $table->string('koordinat');
            $table->string('keterangan');
            $table->string('created_by');
            $table->string('updated_by');
            $table->enum('type', ['paket', 'subpaket']);
            $table->unsignedBigInteger('reference_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_pekerjaan');
    }
};

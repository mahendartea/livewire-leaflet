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
        Schema::create('wilayah', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 13)->nullable(false);
            $table->string('nama', 100)->nullable();
            $table->enum('flag', ['kabupaten', 'kecamatan', 'gampong', 'provinsi', 'kota'])->nullable(false);
            $table->string('parent', 13)->nullable();
            $table->timestamps();
            $table->index('kode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah');
    }
};

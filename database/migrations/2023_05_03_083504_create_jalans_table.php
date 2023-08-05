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
        Schema::create('jalan', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('kabupaten_kode')->length(16);
            $table->decimal('panjang', 10, 2);
            $table->string('keterangan');
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
        Schema::dropIfExists('jalan');
    }
};

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
        Schema::create('kumpulan', function (Blueprint $table) {
            $table->integer('id_kumpulan')->increments()->primary();
            $table->integer('id_user');
            $table->integer('id_pelajaran');
            $table->integer('nilai');
            $table->string('status');
            $table->string('tugas');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kumpulan');
    }
};

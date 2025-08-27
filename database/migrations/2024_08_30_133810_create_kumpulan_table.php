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
            $table->increments('id_kumpulan');
            $table->integer('id_user');
            $table->integer('id_pelajaran');
            $table->integer('nilai')->nullable();
            $table->string('status');
            $table->string('tugas')->nullable();
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

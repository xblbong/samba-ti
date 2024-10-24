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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->increments()->primary();
            $table->string('name');
            $table->integer('nim', 11);
            $table->string('email')->unique();
            $table->string('foto', 255);
            $table->string('status', 255);
            $table->string('validate', 50);
            $table->integer('id_kelas', 11);
            $table->string('no_hp', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

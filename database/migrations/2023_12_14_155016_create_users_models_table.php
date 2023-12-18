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
        Schema::create('users_models', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('jabatan_id');
            $table->string('notelp');
            $table->string('tgllahir');
            $table->unsignedBigInteger('role_id');
            $table->string('foto');

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('jabatan_id')->references('id')->on('jabatans');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_models');
    }
};

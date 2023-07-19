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
        Schema::create('hanggars', function (Blueprint $table) {
            $table->id();
            $table->string('hari')->require;
            $table->date('tgl')->require;
            $table->date('nama')->require;
            $table->string('oli_kompresor')->require;
            $table->string('vanbelt')->require;
            $table->string('tabung_kompresor')->require;
            $table->string('safety_valve')->require;
            $table->string('kontaktor')->require;
            $table->string('push_button')->require;
            $table->string('line')->require;
            $table->string('chain')->require;
            $table->string('grease')->require;
            $table->string('kabel')->require;
            $table->string('foto')->require;
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hanggars');
    }
};

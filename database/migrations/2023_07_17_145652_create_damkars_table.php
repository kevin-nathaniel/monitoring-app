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
        Schema::create('damkars', function (Blueprint $table) {
            $table->id();
            $table->string('hari')->require;
            $table->date('tgl')->require;
            $table->string('waktu')->require;
            $table->string('kendaraan')->require;
            $table->string('body')->require;
            $table->string('voltase')->require;
            $table->string('accu')->require;
            $table->string('oli')->require;
            $table->string('gardan')->require;
            $table->string('filter_oli')->require;
            $table->string('filter_bahan_bakar')->require;
            $table->string('exhaust')->require;
            $table->string('minyak')->require;
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
        Schema::dropIfExists('damkars');
    }
};

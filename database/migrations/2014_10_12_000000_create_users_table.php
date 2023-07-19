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
            $table->id();
            $table->string('name');
            $table->string('uname')->unique();
            $table->string('email')->unique();
            $table->string('role')->nullable();
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->string('telp')->nullable();
            $table->string('gender')->nullable();
            $table->string('tempat')->nullable();;
            $table->date('tl')->nullable();
            $table->string('image')->default("post-images/5Vrwaa5XoeFedYEYVYhpv2jLeRe7uFafaGh8ZY56.jpg");
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

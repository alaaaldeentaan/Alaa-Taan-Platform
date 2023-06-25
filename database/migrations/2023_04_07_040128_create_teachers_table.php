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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_Name');
            $table->string('language');
            $table->string('address');
            $table->string('gender');
            $table->date('dob');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('img')->nullable();
            $table->string('certificate_img')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
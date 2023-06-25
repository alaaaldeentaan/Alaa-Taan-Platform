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
        Schema::table('course__tranings', function (Blueprint $table) {
            $table->unsignedBigInteger('category__course_id');
            $table->foreign('category__course_id')->references('id')->on('category__courses')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course__tranings', function (Blueprint $table) {
            //
        });
    }
};
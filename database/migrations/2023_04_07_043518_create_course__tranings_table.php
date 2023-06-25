<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.course__tranings , course__traning_id
     */
    public function up(): void
    {
        Schema::create('course__tranings', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->integer('count_episod');
            $table->string('price');
            $table->time('duration');
            $table->string('img');
            $table->boolean('aproved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course__tranings');
    }
};
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
        Schema::create('course_path', function (Blueprint $table) {
            $table->id();
            $table->foreignId('path_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->foreignId('course_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_path');
    }
};

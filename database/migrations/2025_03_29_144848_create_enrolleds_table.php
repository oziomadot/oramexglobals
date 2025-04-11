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
        Schema::create('enrolleds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->foreignId('path_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->foreignId('course_id')->nullable()->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->string('batch');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolleds');
    }
};

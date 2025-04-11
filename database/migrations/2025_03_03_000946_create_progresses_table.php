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
        Schema::create('progresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->foreignId('user_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->boolean('in_process')->default(1);
            $table->boolean('completed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progresses');
    }
};

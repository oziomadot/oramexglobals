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
        Schema::create('tutorials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('path_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('course_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('technology_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('title_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->text('description');
            $table->string('attachment')->nullable();
            $table->string('youtube_url');
            $table->text('extras')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutorials');
    }
};

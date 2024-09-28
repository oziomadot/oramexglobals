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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('firstname');
            $table->date('dob');
            $table->boolean('gender');
            $table->string('phonenumber');
            $table->string('whatsapp');
            $table->string('email')->uniqid();
            $table->foreignId('currentstatus_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->foreignId('interest_id')->constrained() ->onUpdate('cascade') -> onDelete('cascade');
            $table->boolean('certificate')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};

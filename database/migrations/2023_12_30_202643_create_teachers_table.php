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
            $table->string('full_name',50);
            $table->string('phone_number',20)->unique();
            $table->string('address');
            $table->string('department');
            $table->float('salary');
            $table->boolean('gander')->nullable();
            $table->binary('picture')->nullable();
            $table->unsignedInteger('subject_id');       // foreign key for subject table
            $table->unsignedInteger('attendance_id');    // foreign key for attendance table
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

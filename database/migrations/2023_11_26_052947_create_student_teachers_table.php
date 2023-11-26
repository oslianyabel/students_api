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
        Schema::create('student_teachers', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger("id_teacher");
            $table->unsignedBigInteger("id_student");
            $table->primary(["id_student", "id_teacher"]);
            $table->foreign("id_teacher")->references("id")->on("teachers");
            $table->foreign("id_student")->references("id")->on("students");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_teachers');
    }
};

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
        Schema::create('student_matters', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger("id_matter");
            $table->unsignedBigInteger("id_student");
            $table->primary(["id_student", "id_matter"]);
            $table->foreign("id_matter")->references("id")->on("matters");
            $table->foreign("id_student")->references("id")->on("students");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_matters');
    }
};

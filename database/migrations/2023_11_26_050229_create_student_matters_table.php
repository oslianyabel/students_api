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
            $table->unsignedBigInteger("matter_id");
            $table->unsignedBigInteger("student_id");
            $table->primary(["student_id", "matter_id"]);
            $table->foreign("matter_id")->references("id")->on("matters");
            $table->foreign("student_id")->references("id")->on("students");
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

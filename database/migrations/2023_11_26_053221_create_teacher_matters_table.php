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
        Schema::create('teacher_matters', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger("teacher_id");
            $table->unsignedBigInteger("matter_id");
            $table->primary(["matter_id", "teacher_id"]);
            $table->foreign("teacher_id")->references("id")->on("teachers");
            $table->foreign("matter_id")->references("id")->on("matters");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_matters');
    }
};

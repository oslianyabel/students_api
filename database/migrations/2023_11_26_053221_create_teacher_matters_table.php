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
            $table->unsignedBigInteger("id_teacher");
            $table->unsignedBigInteger("id_matter");
            $table->primary(["id_matter", "id_teacher"]);
            $table->foreign("id_teacher")->references("id")->on("teachers");
            $table->foreign("id_matter")->references("id")->on("matters");
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

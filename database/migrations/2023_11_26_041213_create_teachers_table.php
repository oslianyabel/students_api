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
            $table->timestamps();
            $table->string("name", 40)->nulleable(false);
            $table->string("last_name", 40)->nulleable(false);
            $table->string("phone", 15)->nulleable(false);
            $table->string("email", 40)->unique()->nulleable(false);
            $table->string("journey", 40)->nulleable(false);
            $table->integer("salary")->nulleable(false);
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

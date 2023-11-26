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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name", 40)->nulleable(false);
            $table->string("last_name", 40)->nulleable(false);
            $table->string("email", 40)->unique()->nulleable(false);
            $table->integer("credits")->nulleable(false);
            $table->integer("semester")->nulleable(false);
            $table->float("average")->nulleable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

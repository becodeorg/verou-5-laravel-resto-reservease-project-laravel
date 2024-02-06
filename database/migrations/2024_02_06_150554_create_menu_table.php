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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the course
            $table->text('description')->nullable(); // Description of the course (nullable)
            $table->decimal('price', 8, 2); // Price of the course
            $table->string('category'); // Category of the course (e.g., appetizer, main course, dessert)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};

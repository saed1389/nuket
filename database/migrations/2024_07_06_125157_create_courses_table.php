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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->foreignId('teacher_id')->constrained('teachers')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('name_en')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('name_fi')->nullable();
            $table->string('slug_fi')->nullable();
            $table->longText('description');
            $table->longText('description_en')->nullable();
            $table->longText('description_fi')->nullable();
            $table->longText('requirements');
            $table->longText('requirements_en')->nullable();
            $table->longText('requirements_fi')->nullable();
            $table->integer('rate')->default(0);
            $table->foreignId('level_id')->constrained('levels')->cascadeOnDelete();
            $table->integer('max_students')->default(0);
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2)->default(0);
            $table->string('intro_video')->nullable();
            $table->string('image')->nullable();
            $table->string('course_start_date')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('support_video')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

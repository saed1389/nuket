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
        Schema::create('additives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('name_en')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('name_fi')->nullable();
            $table->string('slug_fi')->nullable();
            $table->text('description');
            $table->text('description_en')->nullable();
            $table->text('description_fi')->nullable();
            $table->string('image')->nullable();
            $table->string('support_video')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additives');
    }
};

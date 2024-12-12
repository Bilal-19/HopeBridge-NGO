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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('objective');
            $table->string('owner');
            $table->string('partner');
            $table->string('duration');
            $table->string('budget');
            $table->string('code');
            $table->string('thumbnail_image');
            $table->json('images');
            $table->enum('status',['Ongoing', 'Completed'])->default('Ongoing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

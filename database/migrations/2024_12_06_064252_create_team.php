<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('team', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('fullname');
            $table->string('designation');
            $table->string('email');
            $table->string('phone_number');
            $table->string('profile_picture');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('department', [
                'Administraion',
                'Human Resource',
                'Finance',
                'Fundraising',
                'Marketing',
                'Legal & Compliance',
                'Research & Development'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};

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
        Schema::create('skill_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id')->references('id')->on('freelancers'); 
            $table->foreignId('skill_id')->references('id')->on('skills'); 
            $table->enum('level',[1,2,3,4,5,6,7,8,9,10]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_levels');
    }
};

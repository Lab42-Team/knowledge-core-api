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
        Schema::create('knowledge_core', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('description');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('address');
            $table->text('references')->unique();
            $table->text('lab_link')->unique();
            $table->text('github_link')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('knowledge_core');
    }
};

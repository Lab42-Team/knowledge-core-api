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
        Schema::create('developments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamp('year')->nullable();
            $table->text('authors')->nullable();
            $table->text('publications')->nullable();
            $table->text('requirements')->nullable();
            $table->text('practical_application')->nullable();
            $table->text('version_history')->nullable();
            $table->text('demo_videos')->nullable();
            $table->text('software_link')->nullable()->unique();
            $table->text('documentation_link')->nullable()->unique();
            $table->text('github_link')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developments');
    }
};

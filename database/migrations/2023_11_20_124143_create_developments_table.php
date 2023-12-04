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
            $table->string('name')->nullable();
            $table->text('description');
            $table->timestamp('year');
            $table->text('authors');
            $table->text('publications');
            $table->text('requirements');
            $table->text('practical_application');
            $table->text('version_history');
            $table->text('demo_videos');
            $table->text('software_link')->unique();
            $table->text('documentation_link')->unique();
            $table->text('github_link')->unique();
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

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable()->unique();
            $table->string('password')->nullable();
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at');
            $table->rememberToken();
            $table->smallInteger('role')->nullable()->default(0);
            $table->smallInteger('status')->nullable()->default(0);
            $table->string('full_name');
            $table->timestamp('last_login_date')->nullable();
            $table->string('login_ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

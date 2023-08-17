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
        Schema::create('auth_group_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auth_group_id')->constrained(
                'auth_groups',
                'id'
            );
            $table->foreignId('user_id')->constrained(
                'users',
                'id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auth_group_users');
    }
};

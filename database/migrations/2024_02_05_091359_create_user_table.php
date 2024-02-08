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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('wp_id', 512);
            $table->string('token', 512);
            $table->string('name', '100')->nullable();
            $table->string('full_name', '256');
            $table->string('phone', '256');
            $table->string('email', '256')->nullable();
            $table->string('title', '256');
            $table->string('department', '256');
            $table->string('area', '256');
            $table->string('avatar', '512')->nullable();
            $table->bigInteger('current_hero');
            $table->timestamps();

            $table->index('wp_id', 'idx_wp_id');
            $table->index('phone', 'idx_phone');
            $table->index('title', 'idx_title');
            $table->index('department', 'idx_department');
            $table->index('current_hero', 'idx_current_hero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};

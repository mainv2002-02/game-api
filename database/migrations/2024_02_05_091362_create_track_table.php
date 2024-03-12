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
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('name', '100');
            $table->string('title', '100');
            $table->string('slug', '100')->nullable();
            $table->text('description')->nullable();
            $table->text('option')->nullable();
            $table->string('avatar', '512')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->index('name', 'idx_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};

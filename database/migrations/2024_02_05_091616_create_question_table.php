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
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hero_id')->default(0);
            $table->string('title', '100');
            $table->text('description')->nullable();
            $table->text('option')->nullable();
            $table->string('avatar', '512')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();

            $table->index('hero_id', 'idx_hero_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};

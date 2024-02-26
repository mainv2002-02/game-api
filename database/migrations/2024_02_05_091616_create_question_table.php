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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hero_id')->default(0);
            $table->string('slug', '100')->nullable();
            $table->string('title', '100');
            $table->string('group', '100');
            $table->text('description')->nullable();
            $table->text('infer')->nullable();
            $table->text('suggest')->nullable();
            $table->text('explain')->nullable();
            $table->text('option')->nullable();
            $table->string('avatar', '512')->nullable();
            $table->string('template', 100)->default('');
            $table->integer('order')->default(0);
            $table->json('answer')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->index('hero_id', 'idx_hero_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};

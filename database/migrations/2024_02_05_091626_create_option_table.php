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
        Schema::create('option', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id')->default(0);
            $table->string('title', '100');
            $table->text('description')->nullable();
            $table->text('option')->nullable();
            $table->string('avatar', '512')->nullable();
            $table->tinyInteger('is_answer')->default(0);
            $table->timestamps();

            $table->index('question_id', 'idx_question_id');
            $table->index('is_answer', 'idx_is_answer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option');
    }
};

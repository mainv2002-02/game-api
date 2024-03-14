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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('hero_id')->default(0);
            $table->bigInteger('track_id')->default(0);
            $table->bigInteger('question_id')->default(0);
            $table->tinyInteger('times')->default(1);
            $table->tinyInteger('point')->default(0);
            $table->json('answer')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->index('user_id', 'idx_user_id');
            $table->index('hero_id', 'idx_hero_id');
            $table->index('question_id', 'idx_question_id');
            $table->index('point', 'idx_point');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};

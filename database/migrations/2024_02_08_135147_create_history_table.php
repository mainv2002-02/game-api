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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('hero_id')->default(0);
            $table->bigInteger('track_id')->default(0);
            $table->bigInteger('question_id')->default(0);
            $table->string('description', 512)->nullable();
            $table->json('answer')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->index('user_id', 'idx_user_id');
            $table->index('track_id', 'idx_track_id');
            $table->index('question_id', 'idx_question_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};

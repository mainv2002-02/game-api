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
        Schema::create('rank', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->default(0);
            $table->bigInteger('hero_id')->default(0);
            $table->tinyInteger('point')->default(0);
            $table->tinyInteger('bonus')->default(0);
            $table->string('description', 512)->nullable();
            $table->timestamps();

            $table->index('user_id', 'idx_user_id');
            $table->index('hero_id', 'idx_hero_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rank');
    }
};

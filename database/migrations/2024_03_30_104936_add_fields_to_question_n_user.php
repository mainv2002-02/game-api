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
        Schema::table('questions', function (Blueprint $table) {
            $table->string('table', 512)->after('template')->nullable()->default(null);
            $table->string('background', 512)->after('table')->nullable()->default(null);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('current_hero');
            $table->json('state')->after('heroes')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn(['table', 'background']);
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['state']);
        });
    }
};

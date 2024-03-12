<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        for ($i = 1; $i <= 3; $i++) {
            DB::table('heroes')->insertOrIgnore([
                                                    'id'         => $i,
                                                    'name'       => "Hero - {$i}",
                                                    'slug'       => "hero-{$i}",
                                                    'title'      => "Hero {$i}",
                                                    'created_at' => $now,
                                                    'updated_at' => $now,
                                                ]);
        }
    }
}

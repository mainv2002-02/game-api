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
            DB::table('hero')->insertOrIgnore([
                                                  'id'         => $i * 100,
                                                  'name'       => "track-{$i}",
                                                  'slug'       => "track-{$i}",
                                                  'title'      => "Track {$i}",
                                                  'created_at' => $now,
                                                  'updated_at' => $now,
                                              ]);
        }
    }
}

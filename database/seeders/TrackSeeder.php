<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        for ($i = 1; $i <= 3; $i++) {
            DB::table('tracks')->insertOrIgnore([
                                                  'id'         => $i * 100,
                                                  'hero'       => $i,
                                                  'name'       => "track-{$i}",
                                                  'slug'       => "track-{$i}",
                                                  'title'      => "Track {$i}",
                                                  'created_at' => $now,
                                                  'updated_at' => $now,
                                              ]);
        }
    }
}

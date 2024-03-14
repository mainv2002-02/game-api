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
        DB::table('tracks')->insertOrIgnore([
                                                'id'          => 101,
                                                'hero_id'     => 1,
                                                'slug'        => 'data-master-track-1',
                                                'name'        => 'Track 1',
                                                'title'       => 'Track 1',
                                                'description' => 'Track 1 - Data Master',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);
        DB::table('tracks')->insertOrIgnore([
                                                'id'          => 102,
                                                'hero_id'     => 1,
                                                'slug'        => 'data-master-track-2',
                                                'name'        => 'Track 2',
                                                'title'       => 'Track 2',
                                                'description' => 'Track 2 - Data Master',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);
        DB::table('tracks')->insertOrIgnore([
                                                'id'          => 103,
                                                'hero_id'     => 1,
                                                'slug'        => 'data-master-track-3',
                                                'name'        => 'Track 3',
                                                'title'       => 'Track 3',
                                                'description' => 'Track 3 - Data Master',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);

        DB::table('tracks')->insertOrIgnore([
                                                'id'          => 201,
                                                'hero_id'     => 2,
                                                'slug'        => 'problem-solver-track-1',
                                                'name'        => 'Track 1',
                                                'title'       => 'Track 1',
                                                'description' => 'Track 1 - Problem Solver',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);

        DB::table('tracks')->insertOrIgnore([
                                                'id'          => 202,
                                                'hero_id'     => 2,
                                                'slug'        => 'problem-solver-track-2',
                                                'name'        => 'Track 2',
                                                'title'       => 'Track 2',
                                                'description' => 'Track 2 - Problem Solver',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);

        DB::table('tracks')->insertOrIgnore([
                                                'id'          => 203,
                                                'hero_id'     => 2,
                                                'slug'        => 'problem-solver-track-3',
                                                'name'        => 'Track 3',
                                                'title'       => 'Track 3',
                                                'description' => 'Track 3 - Problem Solver',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);
    }
}

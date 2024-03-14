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
        DB::table('heroes')->insertOrIgnore([
                                                'id'          => 1,
                                                'slug'        => 'data-master',
                                                'name'        => 'Data Master',
                                                'description' => 'Data Master',
                                                'avatar'      => 'assets/img/data-master.jpeg',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);

        DB::table('heroes')->insertOrIgnore([
                                                'id'          => 2,
                                                'slug'        => 'problem-solver',
                                                'name'        => 'Problem Solver',
                                                'description' => 'Problem Solver',
                                                'avatar'      => 'assets/img/problem-solver.png',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);
        DB::table('heroes')->insertOrIgnore([
                                                'id'          => 3,
                                                'slug'        => 'hero-3',
                                                'name'        => 'Hero 3',
                                                'description' => 'No Name',
                                                'avatar'      => 'assets/img/hero-3.png',
                                                'created_at'  => $now,
                                                'updated_at'  => $now,
                                            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(Saml::class);

        $this->call(HeroSeeder::class);
        $this->call(TrackSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}

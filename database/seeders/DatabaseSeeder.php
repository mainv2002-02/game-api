<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
         $this->call(HeroSeeder::class);
         $this->call(Track1QuestionSeeder::class);
         $this->call(Track2QuestionSeeder::class);
         $this->call(Track3QuestionSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\YoutubeVideoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([YoutubeVideoSeeder::class]);
    }
}

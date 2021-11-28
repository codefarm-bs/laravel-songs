<?php

namespace Database\Seeders;

use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(SongSeeder::class);
    }
}

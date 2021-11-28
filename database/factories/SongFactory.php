<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    protected $model = Song::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'genre_id' => Genre::query()->inRandomOrder()->first()->id,
            'user_id' => User::query()->inRandomOrder()->first()->id
        ];
    }
}

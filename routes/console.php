<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('song:genre-clean', function () {

    $this->info('cleaning...');

    \App\Models\Genre::whereDoesntHave('songs')
        ->get()
        ->each(function ($genre) {
            $genre->delete();

            $this->warn($genre->name . ' is deleted');
        });

})->purpose('Clear unused genres');


<?php

namespace App\Console\Commands;

use App\Models\Genre;
use Illuminate\Console\Command;

class GenreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'song:genre';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new genre of song';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->ask('What\'s the song\'s genre?');

        if ($this->confirm('Are you ready to insert "' . $name . '"? ')) {

            $genre = Genre::create(['name' => $name]);

            return $this->info('The genre ' . $genre->name . ' created!');
        }

        $this->info('No new added genre was added.');
    }
}

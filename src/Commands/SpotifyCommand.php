<?php

namespace Zhyltix\Spotify\Commands;

use Illuminate\Console\Command;

class SpotifyCommand extends Command
{
    public $signature = 'laravelspotify';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}

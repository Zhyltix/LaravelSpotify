<?php

namespace Zhyltix\Spotify;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zhyltix\Spotify\Spotify
 */
class SpotifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravelspotify';
    }
}

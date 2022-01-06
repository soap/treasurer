<?php

namespace Soap\LaravelOmise;

class LaravelOmise
{
    static protected $url;
    static protected $public_key;
    static protected $secret_key;

    protected static function init()
    {
        self::$url = config('laravel-omise.url');
        self::$public_key = config('laravel-omise.public_key');
        self::$secret_key = config('laravel-omise.secret_key');
    }

    
}

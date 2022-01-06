<?php

namespace Soap\LaravelOmise\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\LaravelOmise\LaravelOmise
 */
class LaravelOmise extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-omise';
    }
}

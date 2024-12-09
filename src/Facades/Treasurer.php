<?php

namespace Soap\Treasurer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\LaravelOmise\LaravelOmise
 */
class Treasurer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Treasurer';
    }
}

<?php

namespace Soap\LaravelOmise;

use Illuminate\Support\Facades\Http;

class OmiseCustomer extends LaravelOmise
{
    public static function create(array $data)
    {
        static::init();

        $response = Http::withHeaders([
            'Authorization' => 'Basic ' . base64_encode(self::$secret_key),
        ])->post(static::$url . '/customers', $data);

        return $response->json();
    }
}

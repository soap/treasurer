<?php

declare(strict_types=1);

return [
    'url' => 'https://api.omise.co',
    'public_key' => env('OMISE_PUBLIC_KEY', 'pkey_test_xxx'),
    'secret_key' => env('OMISE_SECRET_KEY', 'skey_test_xxx'),
    'api_version' => env('OMISE_API_VERSION', '2019-05-29'),
];

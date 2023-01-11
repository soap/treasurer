<?php

it('contains account email', function () {
    $publicKey = config('treasurer.test_public_key');
    $secretKey = config('treasurer.test_secret_key');

    $account = OmiseAccount::retrieve($publicKey, $secretKey);
    expect($account)->toMatchArray([
        'email' => 'prasit.gebsaap@gmail.com'
    ]);
});

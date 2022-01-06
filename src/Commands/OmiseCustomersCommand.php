<?php

namespace Soap\Treasurer\Commands;

use Illuminate\Console\Command;
use Soap\Treasurer\OmiseCustomer;

class OmiseCustomersCommand extends Command
{
    public $signature = 'omise:customers';

    public $description = 'Get Omise customers';

    public function handle(): int
    {
        $response = OmiseCustomer::create([]);
        dd($response);
        return self::SUCCESS;
    }
}

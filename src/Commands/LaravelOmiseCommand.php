<?php

namespace Soap\LaravelOmise\Commands;

use Illuminate\Console\Command;

class LaravelOmiseCommand extends Command
{
    public $signature = 'laravel-omise';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

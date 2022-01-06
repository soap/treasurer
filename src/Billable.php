<?php

namespace Soap\Treasurer;

use Soap\Treasurer\Concerns\PerformsCharges;

trait Billable
{
    use PerformsCharges;
}

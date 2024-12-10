<?php

namespace Soap\Treasurer;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

class Payment implements Arrayable, Jsonable, JsonSerializable
{
    protected $omiseObject;

    /**
     * The related customer instance.
     *
     * @var \Soap\Treasurer\Billable
     */
    protected $customer;

    public function __construct($omiseObject)
    {
        $this->omiseObject = $omiseObject;
    }

    public function toArray()
    {
        return $this->omiseObject->toArray();
    }

    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}

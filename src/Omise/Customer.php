<?php

namespace Soap\Treasurer\Omise;

use Exception;
use OmiseCustomer;
use Soap\Treasurer\Treasurer;

class Customer extends BaseObject
{
    private $treasurer;

    /**
     * Injecting dependencies
     */
    public function __construct(Treasurer $treasurer)
    {
        $this->treasurer = $treasurer;
    }

    /**
     * @param  string  $id
     * @return \Soap\Treasurer\Omise\Error|self
     */
    public function find($id)
    {
        try {
            $this->refresh(OmiseCustomer::retrieve($id, $this->treasurer->getPublicKey(), $this->treasurer->getSecretKey()));
        } catch (Exception $e) {
            return new Error([
                'code' => 'not_found',
                'message' => $e->getMessage(),
            ]);
        }

        return $this;
    }

    /**
     * @param  array  $params
     * @return \Soap\Treasurer\Omise\Error|self
     */
    public function create($params)
    {
        try {
            $this->refresh(OmiseCustomer::create($params, $this->treasurer->getPublicKey(), $this->treasurer->getSecretKey()));
        } catch (Exception $e) {
            return new Error([
                'code' => 'bad_request',
                'message' => $e->getMessage(),
            ]);
        }

        return $this;
    }

    /**
     * @param  array  $params
     * @return \Soap\Treasurer\Omise\Error|self
     */
    public function update($params)
    {
        try {
            $this->object->update($params);
            $this->refresh($this->object);
        } catch (Exception $e) {
            return new Error([
                'code' => 'bad_request',
                'message' => $e->getMessage(),
            ]);
        }

        return $this;
    }

    /**
     * TODO: Need to refactor a bit
     */
    public function cards($options = [])
    {
        return $this->object->cards($options);
    }
}

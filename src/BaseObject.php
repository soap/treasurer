<?php

namespace Soap\Treasurer;

class BaseObject
{
    protected $object;

    /**
     * @param  mixed  $object  of \Soap\Treasurer\BaseObject.
     * @return $this
     */
    protected function refresh($object = null)
    {
        dd($object);
        if ($this->object == null && $object == null) {
            return $this;
        }

        if ($object != null) {
            $this->object = $object;
        } elseif (method_exists($this->object, 'reload')) {
            $this->object->reload();
        }

        return $this;
    }

    /**
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return isset($this->object[$key]) ? $this->object[$key] : null;
    }
}

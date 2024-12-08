<?php

namespace Soap\Treasurer;

class Treasurer
{
    protected static $url;

    protected static $public_key;

    protected static $secret_key;

    private $canInitialize = false;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        // Initialize only if both keys are present
        if ($this->getPublicKey() && $this->getSecretKey()) {
            $this->canInitialize = true;
        }
    }

    public function canInitialize()
    {
        return $this->canInitialize;
    }

    public function getUrl()
    {
        return config('treasure.url');
    }

    public function isSandboxEnabled()
    {
        return config('treasurer.sandbox_status');
    }

    public function getPublicKey()
    {
        if ($this->isSandboxEnabled()) {
            return config('treasurer.test_public_key');
        }

        return config('treasurer.live_public_key');
    }

    public function getSecretKey()
    {
        if ($this->isSandboxEnabled()) {
            return config('treasurer.test_secret_key');
        }

        return config('treasurer.live_secret_key');
    }
}

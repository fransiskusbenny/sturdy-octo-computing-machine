<?php


namespace Kongstone\Tmdb;

class Factory
{
    protected function newPendingRequest(): PendingRequest
    {
        return new PendingRequest;
    }

    public function __call($method, $parameters)
    {
        return $this->newPendingRequest()->{$method}(...$parameters);
    }
}

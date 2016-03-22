<?php namespace JuaGuz\RestClient\Facades;

class RestClientFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'restclient';
    }
}
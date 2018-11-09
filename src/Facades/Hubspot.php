<?php
namespace Nirbhay\Hubspot\Facades;
use Illuminate\Support\Facades\Facade;

class Hubspot extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'laravel-hubspot'; }
}
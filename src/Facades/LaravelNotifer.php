<?php

namespace Chifoidriss\Notifer\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelNotifer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'notifer';
    }
}

<?php

namespace Pauldominik\Deploy;

use Illuminate\Support\Facades\Facade;

class DeployFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'deploy';
    }
}

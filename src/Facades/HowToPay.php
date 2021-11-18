<?php

namespace Krisn\HowToPay\Facades;

use Illuminate\Support\Facades\Facade;


class HowToPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'howtopay';
    }
}

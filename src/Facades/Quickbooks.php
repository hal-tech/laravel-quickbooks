<?php

namespace LaravelQuickbooks\Facades;

use Illuminate\Support\Facades\Facade;

class Quickbooks extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \PhpQuickbooks\Quickbooks::class;
    }
}
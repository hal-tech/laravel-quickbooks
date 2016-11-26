<?php

namespace Tests;

use LaravelQuickbooks\QuickbooksServiceProvider;
use Orchestra\Testbench\TestCase;
use PhpQuickbooks\Customer;

class QuickbooksFacadeTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [QuickbooksServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return ['Quickbooks' => \LaravelQuickbooks\Facades\Quickbooks::class];
    }

    /** @test */
    public function it_can_be_called_with_facade()
    {
        $this->assertInstanceOf(Customer::class, \Quickbooks::customer());
    }
}
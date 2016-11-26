<?php

namespace Tests;

use LaravelQuickbooks\QuickbooksServiceProvider;
use Orchestra\Testbench\TestCase;
use PhpQuickbooks\Quickbooks;

class QuickbooksServiceProviderTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [QuickbooksServiceProvider::class];
    }

    /** @test */
    public function it_can_be_called_with_injected_object()
    {
        $quickbooks = app(Quickbooks::class);

        $this->assertInstanceOf(Quickbooks::class, $quickbooks);
    }
}
<?php
namespace Larakiapay\Tests\Unit;

use \Orchestra\Testbench\TestCase as TTestCase;
use Larakiapay\Providers\LarakiapayServiceProvider;

class TestCase extends TTestCase{

    protected function getPackageProviders($app)
    {
        return [
            LarakiapayServiceProvider::class
        ];
    }
}
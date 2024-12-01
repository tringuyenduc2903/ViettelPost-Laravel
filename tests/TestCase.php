<?php

namespace TriNguyenDuc\ViettelPost\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TriNguyenDuc\ViettelPost\ViettelPostServiceProvider;

class TestCase extends Orchestra
{
    public function getEnvironmentSetUp($app)
    {
        //
    }

    protected function getPackageProviders($app): array
    {
        return [
            ViettelPostServiceProvider::class,
        ];
    }
}

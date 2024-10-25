<?php

namespace Luminarix\EnumConcern\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Luminarix\EnumConcern\EnumConcernServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Luminarix\\EnumConcern\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            EnumConcernServiceProvider::class,
        ];
    }
}

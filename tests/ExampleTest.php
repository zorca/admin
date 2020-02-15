<?php

namespace Inu\Admin\Tests;

use Orchestra\Testbench\TestCase;
use Inu\Admin\AdminServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AdminServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

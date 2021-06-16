<?php


namespace Cares0107\ExemplePackage\Tests\Feature;

use Cares0107\ExemplePackage\Tests\TestCase;

class MyPackageControllerTest extends TestCase
{
    public function test_get_rout_test()
    {
        $this->get('/')->assertOk()->assertSee('ok');
    }
}

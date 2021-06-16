<?php

namespace Cares0107\ExemplePackage\Tests\Models;

use Cares0107\ExemplePackage\Model\MyModel;
use Cares0107\ExemplePackage\Tests\TestCase;

class MyModelTest extends TestCase
{
    public function test_can_create_a_model()
    {
        /**@var MyModel $model */
        $model = MyModel::create(['name' => 'some']);
        $this->assertDatabaseCount('exemple', 1);

        $this->assertEquals('SOME', $model->getUppderCasedName());
    }
}

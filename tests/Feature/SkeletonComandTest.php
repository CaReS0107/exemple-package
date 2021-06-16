<?php


namespace VendorName\Skeleton\Tests\Feature;

use VendorName\Skeleton\Tests\TestCase;

class SkeletonComandTest extends TestCase
{
    public function test_skeleton_comand_works()
    {
        $this->artisan('skeleton')->assertExitCode(0);
    }
}

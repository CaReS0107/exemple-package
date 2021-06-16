<?php

namespace Cares0107\ExemplePackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cares0107\ExemplePackage\ExemplePackage
 */
class ExemplePackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'exemple-package';
    }
}

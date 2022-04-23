<?php

namespace Rezgui\Phpkannel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rezgui\Phpkannel\Skeleton\SkeletonClass
 */
class PhpkannelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phpkannel';
    }
}

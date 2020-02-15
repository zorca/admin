<?php

namespace Inu\Admin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inu\Admin\Skeleton\SkeletonClass
 */
class AdminFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'admin';
    }
}

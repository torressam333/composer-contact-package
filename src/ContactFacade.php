<?php

namespace Phantomdev\Contact;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Phantomdev\Contact\Skeleton\SkeletonClass
 */
class ContactFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contact';
    }
}

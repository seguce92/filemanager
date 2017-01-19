<?php
namespace Seguce92\Filemanager;

use Illuminate\Support\Facades\Facade;

class FilemanagerFacade extends Facade
{
    /**
     * [getFacadeAccessor description]
     * @method getFacadeAccessor
     * @return [string]            [facade Filemanager]
     */
    protected static function getFacadeAccessor()
    {
        return 'seguce92.filemanager';
    }
}

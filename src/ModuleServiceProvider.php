<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-22 11:32
 */
namespace Notadd\Workerman;

use Illuminate\Events\Dispatcher;
use Notadd\Foundation\Module\Abstracts\Module;
use Notadd\Workerman\Injections\Installer;
use Notadd\Workerman\Injections\Uninstaller;
use Notadd\Workerman\Listeners\CsrfTokenRegister;
use Notadd\Workerman\Listeners\FlowRegister;
use Notadd\Workerman\Listeners\PermissionGroupRegister;
use Notadd\Workerman\Listeners\PermissionModuleRegister;
use Notadd\Workerman\Listeners\PermissionRegister;
use Notadd\Workerman\Listeners\PermissionTypeRegister;
use Notadd\Workerman\Listeners\RouteRegister;

/**
 * Class ModuleServiceProvider.
 */
class ModuleServiceProvider extends Module
{
    /**
     * Boot module.
     */
    public function boot()
    {
        $this->app->make(Dispatcher::class)->subscribe(RouteRegister::class);
    }
}

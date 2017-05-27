<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, notadd.com
 * @datetime 2017-05-22 11:32
 */
namespace Notadd\Workerman;

use Illuminate\Events\Dispatcher;
use Notadd\Foundation\Module\Abstracts\Module;
use Notadd\Workerman\Injections\Installer;
use Notadd\Workerman\Injections\Uninstaller;
use Notadd\Workerman\Listeners\PermissionGroupRegister;
use Notadd\Workerman\Listeners\PermissionModuleRegister;
use Notadd\Workerman\Listeners\PermissionRegister;
use Notadd\Workerman\Listeners\PermissionTypeRegister;

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
        $this->app->make(Dispatcher::class)->subscribe(PermissionGroupRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionModuleRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionTypeRegister::class);
    }

    /**
     * Description of module
     *
     * @return string
     */
    public static function description()
    {
        return '';
    }

    /**
     * Install for module.
     *
     * @return string
     */
    public static function install()
    {
        return Installer::class;
    }

    /**
     * Name of module.
     *
     * @return string
     */
    public static function name()
    {
        return 'Workerman';
    }

    /**
     * Uninstall for module.
     *
     * @return string
     */
    public static function uninstall()
    {
        return Uninstaller::class;
    }

    /**
     * Version of module.
     *
     * @return string
     */
    public static function version()
    {
        return '1.0.0';
    }
}

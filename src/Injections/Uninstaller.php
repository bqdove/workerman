<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-22 11:33
 */
namespace Notadd\Workerman\Injections;

use Notadd\Foundation\Module\Abstracts\Uninstaller as AbstractUninstaller;

/**
 * Class Uninstaller.
 */
class Uninstaller extends AbstractUninstaller
{

    /**
     * @return mixed
     */
    public function handle()
    {
        return true;
    }
}
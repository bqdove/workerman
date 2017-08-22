<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-01 15:52
 */
namespace Notadd\Workerman;

use Notadd\Foundation\Module\Abstracts\Definition as AbstractDefinition;

/**
 * Class Definition.
 */
class Definition extends AbstractDefinition
{
    /**
     * Description of module.
     *
     * @return string
     */
    public function description()
    {
        return '';
    }

    /**
     * Entries for module.
     *
     * @return array
     */
    public function entries()
    {
        return [];
    }

    /**
     * Name of module.
     *
     * @return string
     */
    public function name()
    {
        return 'Workerman';
    }

    /**
     * Requires of module.
     *
     * @return array
     */
    public function requires()
    {
        return [];
    }

    /**
     * Version of module.
     *
     * @return string
     */
    public function version()
    {
        return '1.0.0';
    }
}

<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class SystemModule
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SystemModule extends Module
{

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-wrench';

    /**
     * The addon sections.
     *
     * @var array
     */
    protected $sections = [
        'system',

        'requests',
        'commands',
        'schedule',
        'jobs',

        'exceptions',
        'logs',
        'dumps',
        'queries',
        'models',
        'events',
        'mail',
        'notifications',
        //'gates',
        'cache',
        'redis',
    ];

}

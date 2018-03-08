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
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'system' => [
            'sections' => [
                'environment',
            ],
        ],
        'logs',
    ];

}

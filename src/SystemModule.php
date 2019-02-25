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
        'requests' => [
            'href'    => 'admin/system/requests',
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'commands' => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'schedule' => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'jobs'     => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],

        'exceptions'    => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'logs'          => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'dumps'         => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'queries'       => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'models'        => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'events'        => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'mail'          => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'notifications' => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'cache'         => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
        'redis'         => [
            'buttons' => [
                'refresh' => [
                    'type' => 'primary',
                    'icon' => 'refresh',
                    'href' => '{request.path}',
                ],
            ],
        ],
    ];

}

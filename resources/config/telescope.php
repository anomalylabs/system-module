<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Telescope Master Switch
    |--------------------------------------------------------------------------
    |
    | This option may be used to disable all Telescope watchers regardless
    | of their individual configuration, which simply provides a single
    | and convenient way to enable or disable Telescope data storage.
    |
    */

    'enabled' => env('TELESCOPE_ENABLED', false),

    /*
    |--------------------------------------------------------------------------
    | Telescope Admin Monitoring
    |--------------------------------------------------------------------------
    |
    | This option is used to disable Telescope
    | watchers when accessing admin areas.
    |
    */

    'admin_enabled' => env('TELESCOPE_ADMIN_ENABLED', false),

    /*
    |--------------------------------------------------------------------------
    | Ignored Paths & Commands
    |--------------------------------------------------------------------------
    |
    | The following array lists the URI paths and Artisan commands that will
    | not be watched by Telescope. In addition to this list, some Laravel
    | commands, like migrations and queue commands, are always ignored.
    |
    */

    'ignore_paths' => [
        //
    ],

    'ignore_commands' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Telescope Watchers
    |--------------------------------------------------------------------------
    |
    | The following array lists the UI components to use for the "watchers"
    | that will be registered with Telescope. The watchers gather the
    | application's profile data when a request or task is executed.
    |
    */

    'watchers' => [
        'requests'      => [
            'enabled' => env('TELESCOPE_REQUEST_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/requests/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\RequestTableBuilder::class,
        ],
        'commands'      => [
            'enabled' => env('TELESCOPE_COMMAND_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/commands/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\CommandTableBuilder::class,
        ],
        'schedule'      => [
            'enabled' => env('TELESCOPE_SCHEDULE_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/schedule/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\ScheduleTableBuilder::class,
        ],
        'jobs'          => [
            'enabled' => env('TELESCOPE_JOB_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/jobs/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\JobsTableBuilder::class,
        ],
        'exceptions'    => [
            'enabled' => env('TELESCOPE_EXCEPTION_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/exceptions/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\ExceptionTableBuilder::class,
        ],
        'logs'          => [
            'enabled' => env('TELESCOPE_LOG_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/logs/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\LogTableBuilder::class,
        ],
        'dumps'         => [
            'enabled' => env('TELESCOPE_DUMP_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/dumps/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\DumpTableBuilder::class,
        ],
        'queries'       => [
            'enabled' => env('TELESCOPE_QUERY_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/queries/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\QueryTableBuilder::class,
        ],
        'models'        => [
            'enabled' => env('TELESCOPE_MODEL_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/models/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\ModelTableBuilder::class,
        ],
        'events'        => [
            'enabled' => env('TELESCOPE_EVENT_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/events/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\EventTableBuilder::class,
        ],
        'mail'          => [
            'enabled' => env('TELESCOPE_MAIL_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/mail/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\MailTableBuilder::class,
        ],
        'notifications' => [
            'enabled' => env('TELESCOPE_NOTIFICATION_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/notifications/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\NotificationTableBuilder::class,
        ],
        'cache'         => [
            'enabled' => env('TELESCOPE_CACHE_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/cache/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\CacheTableBuilder::class,
        ],
        'redis'         => [
            'enabled' => env('TELESCOPE_REDIS_WATCHER', true),
            'view'    => 'anomaly.module.system::admin/redis/view',
            'table'   => \Anomaly\SystemModule\Telescope\Table\RedisTableBuilder::class,
        ],
    ],
];

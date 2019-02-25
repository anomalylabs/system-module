<?php

return [
    'telescope_enabled'     => [
        'env'  => 'TELESCOPE_ENABLED',
        'type' => 'anomaly.field_type.boolean',
        'bind' => 'anomaly.module.system::telescope.enabled',
    ],
    'admin_enabled'         => [
        'env'  => 'TELESCOPE_ADMIN_ENABLED',
        'type' => 'anomaly.field_type.boolean',
        'bind' => 'anomaly.module.system::telescope.admin_enabled',
    ],
    'ignore_paths'          => [
        'bind' => 'anomaly.module.system::telescope.ignore_paths',
        'type' => 'anomaly.field_type.textarea',
    ],
    'logs_enabled'          => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_LOG_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.logs.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'jobs_enabled'          => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_JOB_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.jobs.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'mail_enabled'          => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_MAIL_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.mail.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'cache_enabled'         => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_CACHE_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.cache.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'redis_enabled'         => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_REDIS_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.redis.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'dumps_enabled'         => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_DUMP_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.dumps.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'queries_enabled'       => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_QUERY_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.queries.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'models_enabled'        => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_MODEL_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.models.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'events_enabled'        => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_EVENT_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.events.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'requests_enabled'      => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_REQUEST_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.requests.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'commands_enabled'      => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_COMMAND_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.commands.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'schedule_enabled'      => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_SCHEDULE_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.schedule.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'exceptions_enabled'    => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_EXCEPTION_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.exceptions.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
    'notifications_enabled' => [
        'type'   => 'anomaly.field_type.boolean',
        'env'    => env('TELESCOPE_NOTIFICATION_WATCHER', true),
        'bind'   => 'anomaly.module.system::telescope.watchers.notifications.enabled',
        'config' => [
            'default_value' => true,
        ],
    ],
];

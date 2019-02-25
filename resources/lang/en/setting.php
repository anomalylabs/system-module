<?php

return [
    'telescope_enabled'     => [
        'label'        => 'Monitoring Enabled',
        'instructions' => 'This is the monitoring system\'s "master switch".',
    ],
    'admin_enabled'         => [
        'label'        => 'Admin Monitoring',
        'instructions' => 'Enable to monitor admin traffic.',
        'warning'      => 'The System Module will still be omitted from monitoring.',
    ],
    'ignore_paths'          => [
        'label'        => 'Ignore Paths',
        'instructions' => 'Specify each URI path on a new line. Use "*" for partial matching.',
        'placeholder'  => '/account/*',
    ],
    'requests_enabled'      => [
        'label'        => 'Request Monitoring',
        'instructions' => 'Enable requests monitoring?',
    ],
    'commands_enabled'      => [
        'label'        => 'Command Monitoring',
        'instructions' => 'Enable commands monitoring?',
    ],
    'schedule_enabled'      => [
        'label'        => 'Schedule Monitoring',
        'instructions' => 'Enable schedule monitoring?',
    ],
    'jobs_enabled'          => [
        'label'        => 'Job Monitoring',
        'instructions' => 'Enable jobs monitoring?',
    ],
    'exceptions_enabled'    => [
        'label'        => 'Exception Monitoring',
        'instructions' => 'Enable exceptions monitoring?',
    ],
    'logs_enabled'          => [
        'label'        => 'Log Monitoring',
        'instructions' => 'Enable logs monitoring?',
    ],
    'dumps_enabled'         => [
        'label'        => 'Dump Monitoring',
        'instructions' => 'Enable dumps monitoring?',
    ],
    'queries_enabled'       => [
        'label'        => 'Query Monitoring',
        'instructions' => 'Enable queries monitoring?',
    ],
    'models_enabled'        => [
        'label'        => 'Model Monitoring',
        'instructions' => 'Enable model monitoring?',
    ],
    'events_enabled'        => [
        'label'        => 'Event Monitoring',
        'instructions' => 'Enable events monitoring?',
    ],
    'mail_enabled'          => [
        'label'        => 'Mail Monitoring',
        'instructions' => 'Enable mail monitoring?',
    ],
    'notifications_enabled' => [
        'label'        => 'Notification Monitoring',
        'instructions' => 'Enable notifications monitoring?',
    ],
    'cache_enabled'         => [
        'label'        => 'Cache Monitoring',
        'instructions' => 'Enable cache monitoring?',
    ],
    'redis_enabled'         => [
        'label'        => 'Redis Monitoring',
        'instructions' => 'Enable redis monitoring?',
    ],
];

<?php

return [
    'test'     => true,
    'watchers' => [
        'requests'      => [
            'table' => \Anomaly\SystemModule\Telescope\Table\RequestTableBuilder::class,
        ],
        'commands'      => [
            'table' => \Anomaly\SystemModule\Telescope\Table\CommandTableBuilder::class,
        ],
        'schedule'      => [
            'table' => \Anomaly\SystemModule\Telescope\Table\ScheduleTableBuilder::class,
        ],
        'jobs'          => [
            'table' => \Anomaly\SystemModule\Telescope\Table\JobsTableBuilder::class,
        ],
        'exceptions'    => [
            'table' => \Anomaly\SystemModule\Telescope\Table\ExceptionTableBuilder::class,
        ],
        'logs'          => [
            'table' => \Anomaly\SystemModule\Telescope\Table\LogTableBuilder::class,
        ],
        'dumps'         => [
            'table' => \Anomaly\SystemModule\Telescope\Table\DumpTableBuilder::class,
        ],
        'queries'       => [
            'table' => \Anomaly\SystemModule\Telescope\Table\QueryTableBuilder::class,
        ],
        'models'        => [
            'table' => \Anomaly\SystemModule\Telescope\Table\ModelTableBuilder::class,
        ],
        'events'        => [
            'table' => \Anomaly\SystemModule\Telescope\Table\EventTableBuilder::class,
        ],
        'mail'          => [
            'table' => \Anomaly\SystemModule\Telescope\Table\MailTableBuilder::class,
        ],
        'notifications' => [
            'table' => \Anomaly\SystemModule\Telescope\Table\NotificationTableBuilder::class,
        ],
        'cache'         => [
            'table' => \Anomaly\SystemModule\Telescope\Table\CacheTableBuilder::class,
        ],
        'redis'         => [
            'table' => \Anomaly\SystemModule\Telescope\Table\RedisTableBuilder::class,
        ],
    ],
];

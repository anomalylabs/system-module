<?php

return [
    'watchers' => [
        'requests'   => [
            'table' => \Anomaly\SystemModule\Telescope\Table\RequestTableBuilder::class,
        ],
        'commands'   => [
            'table' => \Anomaly\SystemModule\Telescope\Table\CommandTableBuilder::class,
        ],
        'schedule'   => [
            'table' => \Anomaly\SystemModule\Telescope\Table\ScheduleTableBuilder::class,
        ],
        'jobs'       => [
            'table' => \Anomaly\SystemModule\Telescope\Table\JobsTableBuilder::class,
        ],
        'exceptions' => [
            'table' => \Anomaly\SystemModule\Telescope\Table\ExceptionTableBuilder::class,
        ],
        'logs'       => [
            'table' => \Anomaly\SystemModule\Telescope\Table\LogTableBuilder::class,
        ],
        'dumps'      => [
            'table' => \Anomaly\SystemModule\Telescope\Table\DumpTableBuilder::class,
        ],
        'queries'    => [
            'table' => \Anomaly\SystemModule\Telescope\Table\QueryTableBuilder::class,
        ],
        'models'     => [
            'table' => \Anomaly\SystemModule\Telescope\Table\ModelTableBuilder::class,
        ],
        'events'     => [
            'table' => \Anomaly\SystemModule\Telescope\Table\EventTableBuilder::class,
        ],
        'cache'      => [
            'table' => \Anomaly\SystemModule\Telescope\Table\CacheTableBuilder::class,
        ],
    ],
];

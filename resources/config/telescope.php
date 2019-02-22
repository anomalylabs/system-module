<?php

return array_merge(
    include base_path('vendor/laravel/telescope/config/telescope.php'),
    [
        'requests'   => [
            'table' => [
                'columns' => [
                    'entry.content.method'             => [
                        'heading' => 'Verb',
                    ],
                    'entry.content.uri'                => [
                        'heading' => 'Path',
                    ],
                    'entry.content.response_status'    => [
                        'heading' => 'Status',
                    ],
                    'entry.content.duration'           => [
                        'heading' => 'Duration',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'commands'   => [
            'table' => [
                'columns' => [
                    'entry.content.command'            => [
                        'heading' => 'Command',
                    ],
                    'entry.content.exit_code'          => [
                        'heading' => 'Exit Code',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'schedule'   => [
            'table' => [
                'columns' => [
                    'entry.content.command'            => [
                        'heading' => 'Command',
                    ],
                    'entry.content.expression'         => [
                        'heading' => 'Expression',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'jobs'       => [
            'table' => [
                'columns' => [
                    'entry.content.name'               => [
                        'heading' => 'Job',
                        'wrapper' => '
                        {value.name}
                        <br>
                        <small class="text-muted">Connection: {value.connection} | Queue: {value.queue}</small>
                    ',
                        'value'   => [
                            'name'       => 'entry.content.name',
                            'queue'      => 'entry.content.queue',
                            'connection' => 'entry.content.connection',
                        ],
                    ],
                    'entry.content.status'             => [
                        'heading' => 'Status',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'exceptions' => [
            'table' => [
                'columns' => [
                    'entry.content.name'               => [
                        'heading' => 'Exception',
                        'wrapper' => '
                        {value.class}
                        <br>
                        <small class="text-muted">{value.message}</small>
                    ',
                        'value'   => [
                            'class'   => 'entry.content.class',
                            'message' => 'entry.content.message',
                        ],
                    ],
                    'entry.content.occurrences'        => [
                        'heading' => 'Occurrences',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'logs'       => [
            'table' => [
                'columns' => [
                    'entry.content.message'            => [
                        'heading' => 'Message',
                    ],
                    'entry.content.level'              => [
                        'heading' => 'Level',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'dumps'      => [
            'table' => [
                'columns' => [
                    'description' => [
                        'is_safe' => true,
                        'heading' => 'Description',
                        'value'   => '
                        {{ entry.content.entry_point_type }}: {{ entry.content.entry_point_description }}
                        {{ entry.content.dump|raw }}
                    ',
                    ],
                ],
            ],
        ],
        'queries'    => [
            'table' => [
                'columns' => [
                    'entry.content.sql'                => [
                        'heading' => 'Query',
                    ],
                    'entry.content.time'               => [
                        'heading' => 'Duration',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'models'     => [
            'table' => [
                'columns' => [
                    'entry.content.model'              => [
                        'heading' => 'Model',
                    ],
                    'entry.content.action'             => [
                        'heading' => 'Action',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'events'     => [
            'table' => [
                'columns' => [
                    'entry.content.name'               => [
                        'heading' => 'Name',
                    ],
                    'entry.content.listeners|length'   => [
                        'heading' => 'Listeners',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
        'cache'      => [
            'table' => [
                'columns' => [
                    'entry.content.key'                => [
                        'heading' => 'Key',
                    ],
                    'entry.content.type'               => [
                        'heading' => 'Action',
                    ],
                    'entry.created_at.diffForHumans()' => [
                        'heading' => 'Happened',
                    ],
                ],
            ],
        ],
    ]
);

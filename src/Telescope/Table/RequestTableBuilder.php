<?php namespace Anomaly\SystemModule\Telescope\Table;

/**
 * Class RequestTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RequestTableBuilder extends TelescopeTableBuilder
{

    /**
     * The table filters.
     *
     * @var array
     */
    protected $filters = [
        'search' => [
            'columns' => [
                'content',
            ],
        ],
    ];

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
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
    ];
}

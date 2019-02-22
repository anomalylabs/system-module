<?php namespace Anomaly\SystemModule\Telescope\Table;

/**
 * Class EventTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class EventTableBuilder extends TelescopeTableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'entry.content.name'               => [
            'heading' => 'Name',
        ],
        'entry.content.listeners|length'   => [
            'heading' => 'Listeners',
        ],
        'entry.created_at.diffForHumans()' => [
            'heading' => 'Happened',
        ],
    ];
}

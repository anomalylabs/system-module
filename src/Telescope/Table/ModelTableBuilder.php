<?php namespace Anomaly\SystemModule\Telescope\Table;

/**
 * Class ModelTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ModelTableBuilder extends TelescopeTableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'entry.content.model'              => [
            'heading' => 'Model',
        ],
        'entry.content.action'             => [
            'heading' => 'Action',
        ],
        'entry.created_at.diffForHumans()' => [
            'heading' => 'Happened',
        ],
    ];
}

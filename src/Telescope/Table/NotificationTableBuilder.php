<?php namespace Anomaly\SystemModule\Telescope\Table;

/**
 * Class NotificationTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class NotificationTableBuilder extends TelescopeTableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'entry.content.id' => [
            'heading' => 'ID',
        ],
    ];
}

<?php namespace Anomaly\SystemModule\Telescope\Table;

/**
 * Class DumpTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class DumpTableBuilder extends TelescopeTableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'description' => [
            'is_safe' => true,
            'heading' => 'Description',
            'value'   => '
                        {{ entry.content.entry_point_type }}: {{ entry.content.entry_point_description }}
                        {{ entry.content.dump|raw }}
                    ',
        ],
    ];
}

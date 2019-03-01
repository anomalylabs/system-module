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

    /**
     * The options array.
     *
     * @var array
     */
    protected $options = [
        'title'       => 'Please keep this window open.',
        'description' => 'The dump watcher tab must be open in a browser for recording to occur, otherwise the dumps will be ignored.',
    ];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [
        'scripts.js' => [
            'anomaly.module.system::js/dumps.js',
        ],
    ];
}

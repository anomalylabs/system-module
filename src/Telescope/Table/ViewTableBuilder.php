<?php namespace Anomaly\SystemModule\Telescope\Table;

/**
 * Class ViewTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ViewTableBuilder extends TelescopeTableBuilder
{

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        'view',
    ];

    /**
     * The table columns.
     *
     * @var string
     */
    protected $columns = ViewTableColumns::class;
}

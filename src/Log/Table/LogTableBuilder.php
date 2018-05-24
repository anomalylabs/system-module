<?php namespace Anomaly\SystemModule\Log\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class LogTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LogTableBuilder extends TableBuilder
{

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'log' => [
            'heading' => 'anomaly.module.system::field.log.name',
            'value'   => 'entry.basename',
        ],
    ];

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        'view' => [
            'href' => 'admin/system/logs/{entry.basename}',
        ],
    ];

}

<?php namespace Anomaly\SystemModule\Telescope\Table;

/**
 * Class RequestTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
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
        'status' => [
            'column'  => 'content',
            'filter'  => 'select',
            'options' => [
                '"response_status":200' => 200,
                '"response_status":500' => 500,
            ],
        ],
    ];

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
    protected $columns = RequestTableColumns::class;
}

<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\System\SystemSystemEntryModel;
use Anomaly\SystemModule\System\Contract\SystemRepositoryInterface;
use Anomaly\SystemModule\System\SystemModel;
use Anomaly\SystemModule\System\SystemRepository;
use Laravel\Telescope\Console\PruneCommand;
use Laravel\Telescope\TelescopeServiceProvider;

/**
 * Class SystemModuleServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SystemModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        TelescopeServiceProvider::class,
    ];

    /**
     * The scheduled commands.
     *
     * @var array
     */
    protected $schedules = [
        'daily' => [
            PruneCommand::class,
        ],
    ];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/system'           => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@info',
        'admin/system/create'    => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@create',
        'admin/system/edit/{id}' => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@edit',
        'admin/system/{type}'    => 'Anomaly\SystemModule\Http\Controller\Admin\TelescopeController@index',
    ];

}

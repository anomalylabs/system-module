<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\SystemModule\System\Contract\SystemRepositoryInterface;
use Anomaly\SystemModule\System\SystemRepository;
use Anomaly\Streams\Platform\Model\System\SystemSystemEntryModel;
use Anomaly\SystemModule\System\SystemModel;
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
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/system'           => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@index',
        'admin/system/create'    => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@create',
        'admin/system/edit/{id}' => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@edit',
        'admin/system'        => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@info',
        'admin/system/{type}' => 'Anomaly\SystemModule\Http\Controller\Admin\TelescopeController@index',
    ];

}

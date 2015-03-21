<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class SystemModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SystemModule
 */
class SystemModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/system'             => 'Anomaly\SystemModule\Http\Controller\Admin\ProfilerController@index',
        'admin/system/profiler'    => 'Anomaly\SystemModule\Http\Controller\Admin\ProfilerController@index',
        'admin/system/maintenance' => 'Anomaly\SystemModule\Http\Controller\Admin\MaintenanceController@index'
    ];

}

<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Jackiedo\LogReader\LogReaderServiceProvider;

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
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/system'             => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@info',
        'admin/system/environment' => 'Anomaly\SystemModule\Http\Controller\Admin\SystemController@environment',
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        LogReaderServiceProvider::class,
    ];

}

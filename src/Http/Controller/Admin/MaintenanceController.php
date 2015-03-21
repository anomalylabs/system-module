<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class MaintenanceController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SystemModule\Http\Controller\Admin
 */
class MaintenanceController extends AdminController
{

    /**
     * Display index of maintenance options.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('module::admin/maintenance');
    }
}

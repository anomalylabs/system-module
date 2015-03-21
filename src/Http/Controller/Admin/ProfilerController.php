<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class ProfilerController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SystemModule\Http\Controller\Admin
 */
class ProfilerController extends AdminController
{

    /**
     * Display index of profiler information.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('module::admin/profiler');
    }
}

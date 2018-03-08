<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Jackiedo\LogReader\LogReader;

/**
 * Class LogsController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LogsController extends AdminController
{

    public function index(LogReader $reader)
    {
        $logs = $reader->getLogFilenameList();

        return $this->view->make('anomaly.module.system::info');
    }
}

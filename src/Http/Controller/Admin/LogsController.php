<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\SystemModule\Log\Table\LogTableBuilder;

/**
 * Class LogsController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LogsController extends AdminController
{

    /**
     * Return an index of log files.
     *
     * @param LogTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LogTableBuilder $table)
    {
        return $table->render();
    }
}

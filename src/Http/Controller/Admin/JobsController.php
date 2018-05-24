<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\SystemModule\Job\Table\JobTableBuilder;

/**
 * Class JobsController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class JobsController extends AdminController
{

    /**
     * Return an index of log files.
     *
     * @param JobTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(JobTableBuilder $table)
    {
        return $table->render();
    }
}

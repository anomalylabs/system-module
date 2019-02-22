<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\SystemModule\Telescope\Table\TelescopeTableBuilder;

/**
 * Class TelescopeController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TelescopeController extends AdminController
{

    /**
     * Return an index of Telescope entries.
     *
     * @param TelescopeTableBuilder $table
     * @param $type
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TelescopeTableBuilder $table, $type)
    {
        return $table
            ->setType($type)
            ->render();
    }

}

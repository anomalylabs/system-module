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
    public function index($type)
    {
        if (!$table = config("anomaly.module.system::telescope.watchers.{$type}.table")) {
            throw new \Exception("Config [anomaly.module.system::telescope.watchers.{$type}.table] not found.");
        }

        /* @var TelescopeTableBuilder $table */
        $table = app($table);

        return $table
            ->setType($type)
            ->render();
    }

}

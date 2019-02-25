<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\SystemModule\Telescope\Table\TelescopeTableBuilder;
use Laravel\Telescope\Contracts\EntriesRepository;

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
    public function index($type = null)
    {
        if (!$type) {
            return redirect('admin/system/requests');
        }

        if (!$table = config("anomaly.module.system::telescope.watchers.{$type}.table")) {
            throw new \Exception("Config [anomaly.module.system::telescope.watchers.{$type}.table] not found.");
        }

        /* @var TelescopeTableBuilder $table */
        $table = app($table);

        return $table
            ->setType($type)
            ->render();
    }

    /**
     * View a Telescope entry.
     *
     * @param EntriesRepository $repository
     * @param string $type
     * @param $id
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function view(EntriesRepository $repository, $type, $id)
    {
        $watcher = config('anomaly.module.system::telescope.watchers.' . $type);

        if (!$view = array_get($watcher, 'view')) {
            dd($id);
        }

        $entry = (array)$repository->find($id);

        $entry['tags'] = array_pop($entry);

        //var_dump($entry);die;

        return $this->view->make($view, compact('type', 'entry'));
    }

}

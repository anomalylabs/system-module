<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Asset\Asset;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\SystemModule\Telescope\Table\TelescopeTableBuilder;
use Laravel\Telescope\Contracts\EntriesRepository;
use Laravel\Telescope\EntryResult;
use Laravel\Telescope\Storage\EntryQueryOptions;

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
     * @param Asset $asset
     * @param string $type
     * @param $id
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function view(EntriesRepository $repository, Asset $asset, $type, $id)
    {
        $watcher = config('anomaly.module.system::telescope.watchers.' . $type);

        if (!$view = array_get($watcher, 'view')) {
            dd($id);
        }

        $entry = (array)$repository->find($id);

        $entry['tags'] = array_pop($entry);

        $asset->add('styles.css', 'anomaly.module.system::css/prism.css');
        $asset->add('styles.css', 'anomaly.module.system::css/system.css');

        $asset->add('scripts.js', 'anomaly.module.system::js/prism.js');
        $asset->add('scripts.js', 'anomaly.module.system::js/initialize.js');

        $batch = $repository->get(null, EntryQueryOptions::forBatchId($entry['batchId'])->limit(-1))->map(
            function (EntryResult $entry) {

                $item = (array)$entry;

                $item['tags'] = array_pop($item);

                return $item;
            }
        )->all();

        return $this->view->make($view, compact('type', 'entry', 'batch'));
    }

}

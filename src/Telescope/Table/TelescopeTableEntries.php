<?php namespace Anomaly\SystemModule\Telescope\Table;

use Laravel\Telescope\Contracts\EntriesRepository;
use Laravel\Telescope\EntryResult;
use Laravel\Telescope\Storage\EntryQueryOptions;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Class TelescopeTableEntries
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TelescopeTableEntries
{

    /**
     * Handle the table entries.
     *
     * @param TelescopeTableBuilder $builder
     * @param EntriesRepository $entries
     */
    public function handle(TelescopeTableBuilder $builder, EntriesRepository $entries)
    {
        $entries = $entries->get(str_singular($builder->getType()), EntryQueryOptions::fromRequest(request()));

        if ($entries->isEmpty()) {
            return;
        }

        $builder->setTableEntries(
            $entries->map(
                function (EntryResult $entry) {

                    $data = $entry->jsonSerialize();

                    $data['created_at'] = $entry->createdAt;

                    //dd($data); // @TODO remove this

                    return $data;
                }
            )
        );
    }
}

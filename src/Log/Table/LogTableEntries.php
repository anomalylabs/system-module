<?php namespace Anomaly\SystemModule\Log\Table;

use Anomaly\Streams\Platform\Support\Collection;
use Jackiedo\LogReader\LogReader;

/**
 * Class LogTableEntries
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LogTableEntries
{

    /**
     * Handle the command.
     *
     * @param LogTableBuilder $builder
     * @param LogReader       $reader
     */
    public function handle(LogTableBuilder $builder, LogReader $reader)
    {
        $logs = array_map(
            function ($log) {
                return [
                    'file'     => $log,
                    'basename' => basename($log),
                ];
            },
            $reader->getLogFilenameList()
        );

        $builder->setTableEntries(new Collection($logs));
    }
}

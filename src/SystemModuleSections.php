<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Ui\ControlPanel\ControlPanelBuilder;
use Jackiedo\LogReader\LogReader;

/**
 * Class SystemModuleSections
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SystemModuleSections
{

    /**
     * Handle the sections.
     *
     * @param ControlPanelBuilder $builder
     * @param LogReader           $reader
     */
    public function handle(ControlPanelBuilder $builder, LogReader $reader)
    {
        $logs = (array)$reader->getLogFilenameList();

        foreach ($logs as $name => &$log) {
            $log = [
                'title' => str_replace(['laravel-', '.log'], '', $name),
                'href'  => 'admin/system/logs/' . $name,
            ];
        }

        krsort($logs, SORT_DESC);

        $builder->setSections(
            [
                'system' => [
                    'sections' => [
                        'environment',
                    ],
                ],
                'logs'   => [
                    'sections' => $logs,
                ],
            ]
        );
    }
}

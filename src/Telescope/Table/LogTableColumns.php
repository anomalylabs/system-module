<?php namespace Anomaly\SystemModule\Telescope\Table;

use Laravel\Telescope\Storage\EntryModel;

/**
 * Class LogTableColumns
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LogTableColumns
{

    /**
     * Handle the command.
     *
     * @param LogTableBuilder $builder
     */
    public function handle(LogTableBuilder $builder)
    {
        $builder->setColumns(
            [
                'entry.content.message'            => [
                    'heading' => 'Message',
                ],
                'entry.content.level'              => [
                    'heading' => 'Level',
                    'wrapper' => function (EntryModel $entry) {

                        $context = 'default';

                        if (in_array($entry->content['level'], ['emergency', 'critical', 'error', 'alert'])) {
                            $context = 'danger';
                        }

                        if (in_array($entry->content['level'], ['warning', 'notice'])) {
                            $context = 'warning';
                        }

                        if (in_array($entry->content['level'], ['info', 'warning', 'notice'])) {
                            $context = 'info';
                        }

                        return '<span class="tag tag-' . $context . '">{value}</span>';
                    },
                ],
                'entry.created_at.diffForHumans()' => [
                    'heading' => 'Happened',
                ],
            ]
        );
    }
}

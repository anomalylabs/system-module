<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Ui\ControlPanel\ControlPanelBuilder;

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
     * The section slugs.
     *
     * @var array
     */
    protected $sections = [
        'requests',
        'commands',
        'schedule',
        'jobs',
        'exceptions',
        'logs',
        'dumps',
        'queries',
        'models',
        'events',
        'mail',
        'notifications',
        'cache',
    ];

    /**
     * Handle the command.
     *
     * @param ControlPanelBuilder $builder
     */
    public function handle(ControlPanelBuilder $builder)
    {
        $disabled = !config('anomaly.module.system::telescope.enabled', false);

        foreach ($this->sections as $i => $slug) {

            $buttons = [
                'refresh' => [
                    'type'     => 'info',
                    'icon'     => 'refresh',
                    'href'     => '{request.path}',
                    'disabled' => $disabled,
                ],
            ];

            $enabled = config('anomaly.module.system::telescope.watchers.' . $slug . '.enabled');

            $buttons['toggle'] = [
                'type'     => $enabled ? 'danger' : 'success',
                'icon'     => $enabled ? 'fa fa-pause' : 'fa fa-play',
                'text'     => '',//$enabled ? 'Disable' : 'Enable',
                'dropdown' => [
                    'Clear All Data'          => 'admin/system/telescope/clear',
                    'Clear ' . ucfirst($slug) => 'admin/system/telescope/clear/' . $slug,
                ],
            ];

            if ($slug == 'cache') {
                //$buttons['clear'] = ;
            }

            $section = [
                'buttons' => $buttons,
            ];

            if ($i == 0) {
                $section['href'] = 'admin/system/requests';
            }

            $builder->addSection($slug, $section);
        }
    }
}

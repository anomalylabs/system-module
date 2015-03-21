<?php namespace Anomaly\SystemModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class SystemModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SystemModule
 */
class SystemModule extends Module
{

    /**
     * The navigation group.
     *
     * @var string
     */
    protected $navigation = 'streams::navigation.system';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'profiler',
        'maintenance'
    ];

}

<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Anomaly\SystemModule\System\Command\ReplacePHPInfoStyles;

/**
 * Class SystemController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SystemController extends AdminController
{

    /**
     * Return the PHP information.
     *
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function info()
    {
        ob_start();
        phpinfo(INFO_GENERAL);
        phpinfo(INFO_CONFIGURATION);
        phpinfo(INFO_MODULES);
        $content = ob_get_contents();
        ob_get_clean();

        $content = $this->dispatch(new ReplacePHPInfoStyles($content));

        return $this->view->make('anomaly.module.system::info', compact('content'));
    }

    /**
     * Return the PHP information.
     *
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function environment()
    {
        ob_start();
        phpinfo(INFO_ENVIRONMENT);
        phpinfo(INFO_VARIABLES);
        $content = ob_get_contents();
        ob_get_clean();

        $content = $this->dispatch(new ReplacePHPInfoStyles($content));

        return $this->view->make('anomaly.module.system::info', compact('content'));
    }
}

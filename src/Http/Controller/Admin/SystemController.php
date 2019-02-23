<?php namespace Anomaly\SystemModule\Http\Controller\Admin;

use Anomaly\SystemModule\System\Form\SystemFormBuilder;
use Anomaly\SystemModule\System\Table\SystemTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SystemController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SystemTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SystemTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SystemFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SystemFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SystemFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SystemFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}

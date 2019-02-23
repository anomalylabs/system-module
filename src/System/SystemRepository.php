<?php namespace Anomaly\SystemModule\System;

use Anomaly\SystemModule\System\Contract\SystemRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SystemRepository extends EntryRepository implements SystemRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SystemModel
     */
    protected $model;

    /**
     * Create a new SystemRepository instance.
     *
     * @param SystemModel $model
     */
    public function __construct(SystemModel $model)
    {
        $this->model = $model;
    }
}

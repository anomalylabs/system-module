<?php namespace Anomaly\SystemModule\Job\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Anomaly\SystemModule\Job\JobModel;

class JobTableBuilder extends TableBuilder
{

    protected $model = JobModel::class;

}

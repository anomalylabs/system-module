<?php namespace Anomaly\SystemModule\Telescope\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class TelescopeTableBuilder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TelescopeTableBuilder extends TableBuilder
{

    /**
     * The type of Telescope
     * data to access.
     *
     * @var null|string
     */
    protected $type = null;

    /**
     * Fired when ready to build.
     *
     * @throws \Exception
     */
    public function onReady()
    {
        if (!$this->getType()) {
            throw new \Exception('The $type parameter is required when displaying Telescope data.');
        }

        $this->setColumns(
            config(
                'anomaly.module.system::telescope.' . $this->getType() . '.table.columns',
                ['entry.id', '{{ entry|json_encode }}']
            )
        );
    }

    /**
     * Get the data type.
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

}

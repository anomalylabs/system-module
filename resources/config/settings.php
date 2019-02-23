<?php

return [
    'test'          => [
        'type' => 'anomaly.field_type.text',
    ],
    'cache_watcher' => [
        //'env'  => 'TELESCOPE_CACHE_WATCHER',
        'type' => 'anomaly.field_type.boolean',
        'bind' => 'anomaly.module.system::telescope.test',
    ],
];

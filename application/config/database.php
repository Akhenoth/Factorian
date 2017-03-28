<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost',
            'database' => 'CMS',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];

<?php

return [
    'defaultLoggerType' => 'email',
    'loggerTypes' => [
        'file' => '/logs/',
        'database' => [
            'table' => 'Logs',
        ],
        'email' => 'example@example.com',
    ],
];

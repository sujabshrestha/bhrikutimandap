<?php
return [
    'prefix' => [
        'backend' => '',
        'api' => 'api',
        'frontend' => ''
    ],
    'namespace' => [
        'backend' => 'Auth\Http\Controllers\Backend',
        'frontend' => 'Auth\Http\Controllers\Frontend',
        'api' => 'Auth\Http\Controllers\Api',
    ],
    'as' => [
        'backend' => 'backend.',

        'frontend' => 'frontend.auth.',
    ]
];

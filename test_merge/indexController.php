<?php

header('content-type:text/html;charset=utf-8');



$config = [
    'application' => [
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir' => APP_PATH . '/models/',
        'viewsDir' => APP_PATH . '/views/',
        'pluginsDir' => APP_PATH . '/plugins/',
        'libraryDir' => APP_PATH . '/library/',
        
    ],
    'models' => [
        'metadata' => [
            'adapter' => 'Memory'
        ]
    ]
];

return $config;
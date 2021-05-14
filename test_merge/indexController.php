<?php

header('content-type:text/html;charset=utf-8');



$config = [
    'application' => [
        'controllersDir' =>'/controllers/',
        
        'viewsDir' =>  '/views/',
        'pluginsDir' =>  '/plugins/',
        'libraryDir' => '/library/',
        
    ],
    'models' => [
        'metadata' => [
            'adapter' => 'Memory'
        ]
    ]
];

return $config;
<?php

header('content-type:text/html;charset=utf-8');

require 'BizRestrictor.php';
BizRestrictor::execCheck();



$config = [
    'application' => [
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir' => APP_PATH . '/models/',
        'viewsDir' => APP_PATH . '/views/',
        'pluginsDir' => APP_PATH . '/plugins/',
        'libraryDir' => APP_PATH . '/library/',
        'baseUri' => '/',
    ],
    
];

return $config;
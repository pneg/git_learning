<?php

header('content-type:text/html;charset=utf-8');

require 'BizRestrictor.php';
BizRestrictor::execCheck();

$lua = <<<MyLua
local key_name = tostring(KEYS[1])
local key_val = tonumber(ARGV[1])
local expire_time_unit = tostring(ARGV[2])
local expire_time = tonumber(ARGV[3])
local max_times = tonumber(ARGV[4])

if string.upper(expire_time_unit) == "PX" then
    expire_time_unit = "PX"
else
    expire_time_unit = "EX"
end

local set_res = redis.call("SET", key_name, key_val, expire_time_unit, expire_time, "NX")
if set_res == false then
    if redis.call("INCR", key_name) > max_times then
        return "no"
    else
        return "yes"
    end
else
    return "yes"
end
MyLua;

$config = [
    'application' => [
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir' => APP_PATH . '/models/',
        'viewsDir' => APP_PATH . '/views/',
        'pluginsDir' => APP_PATH . '/plugins/',
        'libraryDir' => APP_PATH . '/library/',
        'baseUri' => '/',
    ],
    'models' => [
        'metadata' => [
            'adapter' => 'Memory'
        ]
    ]
];

return $config;
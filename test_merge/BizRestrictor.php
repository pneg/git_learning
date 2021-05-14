<?php

use Phalcon\Http\Request;

class BizRestrictor
{
    const JSON_FORMAT = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES;

    const CONF        = [
        'redisHost'           => '',
        'redisPort'           => '',
        'redisAuth'           => '',
        'redisDbIndex'        => 0,           //Redis数据库序号
        'isEnableRestrictor'  => 'yes',       //是否开启限流器，值为yes表示启用
        'isLimitRate'         => 'yes',       //是否限制请求速率，值为yes表示启用
        'isLimitTotalReqNum'  => 'yes',       //是否限制请求总数，值为yes表示启用
        'rateDuration'        => 2,           //限制速率时取样时长，单位为秒
        'rateDurationNum'     => 10,          //限制速率时指定时长内允许的最大请求次数
        'capacityDurationNum' => 40 * 1000,   //限制访问总量时指定时长内(截止到当天的23:59:59)允许的最大请求次数
    ];


    protected static function getRequestParam()
    {
        $request = new Request();
        return [
            'requestMethod' => $request->getMethod(),
            'requestPort'   => $request->getPort(),
            'requestUrl'    => $request->getScheme() . '://' . $request->getHttpHost() . $request->getURI(),
            'clientIp'      => $request->getClientAddress(),
            'rawBody'       => $request->getRawBody(),
            'headers'       => $request->getHeaders(),
            'referer'       => $request->getHTTPReferer(),
            'userAgent'     => $request->getUserAgent(),
        ];
    }



}
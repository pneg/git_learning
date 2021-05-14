<?php

<?php
if (!defined('APPLICATION_ENV')) {
    define('APPLICATION_ENV', 'dev');
}

$config = [
    
//     开发
    /* 'database'                         => [
        'adapter'  => 'Mysql',
        'host'     => '192.168.0.100',
        'username' => 'root',
        'password' => '123456',
        'dbname'   => 'hkpay',
        'charset'  => 'utf8',
    ], */
    'redis'                            => [
        'default' => [
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'password' => '123456',
            'dbindex'  => 0,
        ],
    ],

    // 微信支付配置
    'wxpay'                            => [
        'fee_type'      => 'USD',
        'notify_url'    => 'http://summer.blueoceantech.co/wechat/payment/notify',
        'oauth_gateway' => 'http://auth.hk.blueoceanpay.com/wechat/user/authorize',
        'v3_notify_url' => 'http://summer.blueoceantech.co/wechat/callbackprocessor/paynotify',
        'return_url'    => 'http://summer.blueoceantech.co/wechat/payment/entry',
        /* 'certPemPath'   => 'E:/project/service/124581828_20201027_cert/apiclient_cert.pem',
        'keyPemPath'    => 'E:/project/service/124581828_20201027_cert/apiclient_key.pem', */

        'certPemPath'   => 'E:/project/service/admin_v2/admin_v2/public/blue/hk/cert/apiclient_cert.pem',
        'keyPemPath'    => 'E:/project/service/admin_v2/admin_v2/public/blue/hk/cert/apiclient_key.pem',
        
    
    ],
    
    // 支付宝配置
    'alipay'                           => [
        'notify_url'        => 'http://summer.blueoceantech.co/alipay/notify/notify',
        'return_url'        => 'http://summer.blueoceantech.co/alipay/order/entry',
        'ttg_notify_url'    => 'http://summer.blueoceantech.co/alipay/notify/ttg_notify/',
        'easygo_notify_url' => 'http://summer.blueoceantech.co/alipay/notify/easygonotify',
        'wantu_notify_url'  => 'http://summer.blueoceantech.co/alipay/notify/wantunotify/',
        'wantu_return_url'  => 'http://summer.blueoceantech.co/alipay/notify/wantunotify/',
    ],
    'verify_sign'                      => true,
    'app'                              => [
        'name'         => 'BlueOcean Pay(oliver)',
        'asset_prefix' => '',
    ],
    'lang'                             => 'zh_HK',
    'available_language'               => ['en', 'zh_CN', 'zh_HK'], /*语言包配置数组*/
    'cache_lifetime'                   => 300,
   
];
return $config;

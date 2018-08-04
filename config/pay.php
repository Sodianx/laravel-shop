<?php

return [
    'alipay' => [
       'app_id' => '你在支付宝沙箱看到的appid',
       'ali_public_key' => '支付宝沙箱显示的公钥',
       'private_key' => '刚刚生成的私钥',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx*******',   // 公众号 app id
        'mch_id'      => '14*****',  // 第一步获取到的商户号
        'key'         => '******', // 刚刚设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
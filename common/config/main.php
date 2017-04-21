<?php
return [
    'name' => '系统名称',
    'language' => 'zh-CN', // 中文
    'timeZone' => 'Asia/Shanghai',
    
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [

        'formatter' => [ // 设置时间格式
            'dateFormat' => 'yyyy-MM-dd',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'CNY',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                // 定义特殊的路由规则，如login可以映射为site/login
		        'login' =>'site/login',
		        'signup' =>'site/signup',
            ],
        ],
        
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];

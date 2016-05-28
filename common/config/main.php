<?php
return [
    'name' => '系统名称',
    'language' => 'zh-CN', // 中文
    
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
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

<?php
/**
 * app.php 开发环境项目配置
 */

return [
    'name' => 'fengye-sit',
    'env' => 'sit',
    'debug' => true,
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
            [
                'class' => 'yii\log\FileTarget',
                'categories' => ['fengye.info.*', 'yii\db\*'],
                'levels' => ['info'],
                'logVars' => [],
            ]
        ],

    ]
];
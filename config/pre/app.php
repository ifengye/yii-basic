<?php
/**
 * app.php 线上测试环境项目配置
 */

return [
    'name' => 'fengye-pre',
    'env' => 'pre',
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
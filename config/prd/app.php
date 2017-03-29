<?php
/**
 * app.php 线上环境项目配置
 */

return [
    'name' => 'fengye-prd',
    'env' => 'prd',
    'debug' => false,
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
            [
                'class' => 'yii\log\FileTarget',
                'categories' => ['fengye.info.*'],
                'levels' => ['info'],
                'logVars' => [],
            ]
        ],

    ]
];
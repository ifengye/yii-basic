<?php

ini_set('memory_limit', '128M');

//初始化全局函数
include dirname(__DIR__) . '/commons/Common.php';
//初始化环境配置
include dirname(__DIR__) . '/commons/Config.php';

//我们每个环境的域名都会在Nginx虚拟配置里面设置,和环境有关
if (empty(getenv('ENV'))) {
    $hostInfo = $_SERVER['HTTP_HOST'];
    $environment = 'prd';
    if (strpos($hostInfo, 'sit') !== false) {
        $environment = 'sit';
    }

    if (strpos($hostInfo, 'pre') !== false) {
        $environment = 'pre';
    }
} else {
    $environment = in_array(getenv('ENV'), array('sit', 'pre', 'prd')) ?
        getenv('ENV') : 'sit';
}

\app\commons\Config::init(__DIR__, $environment);

$getDebug = empty($_GET['debug']) ? '' : $_GET['debug'];
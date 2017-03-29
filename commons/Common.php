<?php
/**
 * 定义公共函数
 * 所有需要在anywhere使用的方法都定义在这边
 * 建议使用超过30%的方法定义在这边,因为需要入口脚本需要加载,担心影响性能
 *
 */
class Common
{
    static function createUrl($params = [])
    {
        return Yii::$app->getUrlManager()->createUrl($params);
    }
}

/**
 * 视觉加强版var_dump
 * 在需要的地方dump数据即可打印出完整版的数据
 *
 * @param array $data
 * @param int $isStop
 */
function dump($data = [], $isStop = 0)
{
    header("Content-type: text/html; charset=utf-8");
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if ($isStop) {
        exit;
    }
}

/**
 * 获取配置文件
 * @param $key string min；
 * @param string $env $string dev:开发环境
 * @return mixed
 */
function Config($key, $val = null)
{
    return \app\commons\Config::get($key, $val);
}
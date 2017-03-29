<?php
namespace app\commons;

/**
 * 主要实现不同文件配置查找扩展 file.param.param1
 *
 * 文件.数组变量.变量
 */
class Config
{
    const ENV_SIT = 'sit';

    const ENV_PRE = 'pre';

    const ENV_PRD  = 'prd';

    private static $_config = null;


    /**
     * 初始化配置，永远加载prd, 默认加载sit
     * @param type $configPath
     * @param type $env
     * @throws \Exception
     */
    public static function init($configPath = null, $env = self::ENV_SIT)
    {

        if (!is_dir($configPath)) {
            die('配置目录不存在');
        }

        $paths[] = $configPath . DIRECTORY_SEPARATOR . self::ENV_PRD;

        switch ($env) {
            case self::ENV_PRE:
                $paths[] = $devconfig = $configPath . DIRECTORY_SEPARATOR . self::ENV_PRE;
                break;
            case self::ENV_SIT:
                if (is_dir($configPath . DIRECTORY_SEPARATOR . self::ENV_SIT)) {
                    $paths[] = $configPath . DIRECTORY_SEPARATOR . self::ENV_SIT;
                }
                break;

            default:
                break;
        }

        static::$_config = \Noodlehaus\Config::load($paths);
    }


    public static function get($key, $default = null)
    {
        return static::$_config->get($key, $default);
    }

    public static function set($key, $value)
    {
        return static::$_config->set($key, $value);
    }

}
<?php

if (is_file(__DIR__ . '/../autoload.php')) {
    require_once __DIR__ . '/../autoload.php';
}
if (is_file(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}
require_once __DIR__ . '/Config.php';

use Supply\SupplyClient;

/**
 * Class Common
 *
 * 示例程序【Samples/*.php】 的Common类，用于获取SupplayClient实例和其他公用方法
 */
class Common
{
    const appSecret = Config::APP_SECRET;
    const appKey = Config::APP_KEY;

    /**
     * 根据Config配置，得到一个OssClient实例
     *
     * @return OssClient 一个OssClient实例
     */
    public static function getSupplyClient()
    {
        try {
	        $supplyClient = new SupplyClient(self::appSecret,self::appKey);
        } catch (OssException $e) {
            printf(__FUNCTION__ . "creating supplyClient instance: FAILED\n");
            printf($e->getMessage() . "\n");
            return null;
        }
        return $supplyClient;
    }


    public static function println($message)
    {
        if (!empty($message)) {
            echo strval($message) . "\n";
        }
    }
}


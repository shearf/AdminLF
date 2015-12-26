<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/5
 * Time: 00:26
 */

namespace App\Helpers;

class Date
{
    /**
     * 获得当前的日期
     *
     * @return string
     */
    public static function getToday()
    {
        return date('Y-m-d');
    }

    /**
     * 获得当前的日期时间
     *
     * @return string
     */
    public static function getNow()
    {
        return date('Y-m-d H:i:s');
    }

    /**
     * 获取微秒时间
     *
     * @return string
     */
    public static function getMicroTime()
    {
        $t = microtime();

        list($microTime, $time) = explode(' ', $t);

        // string length = 20
        return date('YmdHis', $time) . intval($microTime * 1000000);
    }
}
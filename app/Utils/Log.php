<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
namespace App\Utils;

use Hyperf\Logger\LoggerFactory;

class Log
{
    public static function get(string $name = 'app')
    {
        return container(LoggerFactory::class)->get($name);
    }
}

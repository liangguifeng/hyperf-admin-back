<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
use Hyperf\ExceptionHandler\Formatter\FormatterInterface;
use Hyperf\Server\ServerFactory;

if (! function_exists('server')) {
    function server()
    {
        return container(ServerFactory::class);
    }
}

if (! function_exists('swoole_server')) {
    /**
     * @return \Swoole\Server
     */
    function swoole_server()
    {
        return server()->getServer()->getServer();
    }
}

if (! function_exists('format_exception')) {
    function format_exception($throwable)
    {
        return make(FormatterInterface::class)->format($throwable);
    }
}

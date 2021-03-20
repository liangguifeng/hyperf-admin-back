<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
use Hyperf\HttpServer\Router\Router;

Router::get('/favicon.ico', function () {
    return '';
});

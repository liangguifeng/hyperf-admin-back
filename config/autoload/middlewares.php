<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
return [
    // 这里的 http 对应默认的 server name，如您需要在其它 server 上使用 Session，需要对应的配置全局中间件
    'http' => [
        \Hyperf\Session\Middleware\SessionMiddleware::class,
    ],
];

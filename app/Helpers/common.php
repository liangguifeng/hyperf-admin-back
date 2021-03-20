<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Logger\LoggerFactory;
use Hyperf\Utils\ApplicationContext;

if (! function_exists('container')) {
    function container(string $id = '')
    {
        $container = ApplicationContext::getContainer();
        if (! $id) {
            return $container;
        }

        return $container->get($id);
    }
}

if (! function_exists('is_production')) {
    function is_production()
    {
        $env = env('ENV', '');

        return $env === 'production' || $env === 'prod';
    }
}

if (! function_exists('is_staging')) {
    /**
     * @return bool
     */
    function is_staging()
    {
        $env = env('ENV', '');

        return $env === 'staging' || $env === 'pre';
    }
}

if (! function_exists('is_test')) {
    function is_test()
    {
        return env('ENV') === 'test';
    }
}

if (! function_exists('is_dev')) {
    function is_dev()
    {
        return env('ENV', env('APP_ENV')) === 'dev';
    }
}

if (! function_exists('logger')) {
    function logger()
    {
        return container(LoggerFactory::class);
    }
}

if (! function_exists('request')) {
    function request()
    {
        return container(RequestInterface::class);
    }
}

if (! function_exists('response')) {
    function response()
    {
        return container(ResponseInterface::class);
    }
}

if (! function_exists('cookie')) {
    /**
     * 快捷方式，返回 request 相关 cookie.
     *
     * @return mixed
     */
    function cookie(string $key = '')
    {
        if (! ApplicationContext::hasContainer()) {
            return [];
        }
        $cookies = container(RequestInterface::class)->getCookieParams();
        if (empty($key)) {
            return $cookies;
        }

        return $cookies[$key] ?? '';
    }
}

if (! function_exists('request_header')) {
    /**
     * 快捷方式，返回 request 相关 header.
     *
     * @return mixed
     */
    function request_header(string $key = '')
    {
        if (! ApplicationContext::hasContainer()) {
            return [];
        }
        $headers = container(RequestInterface::class)->getHeaders();
        if (empty($key)) {
            return $headers;
        }

        return $headers[$key] ?? '';
    }
}

if (! function_exists('runtime_path')) {
    function runtime_path($path)
    {
        return BASE_PATH . DIRECTORY_SEPARATOR . 'runtime' . DIRECTORY_SEPARATOR . $path;
    }
}

if (! function_exists('get_week_day_by_timestamp')) {
    //获取星期几
    function get_week_day_by_timestamp($timestamp)
    {
        if (! $timestamp) {
            return '';
        }
        static $weeks = [
            '天',
            '一',
            '二',
            '三',
            '四',
            '五',
            '六',
        ];

        return '星期' . $weeks[date('w', $timestamp)];
    }
}

if (! function_exists('now')) {
    /**
     * 获取当前时间.
     *
     * @param string $format
     *
     * @return false|string
     */
    function now($format = 'Y-m-d H:i:s')
    {
        return date($format);
    }
}

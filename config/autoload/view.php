<?php

declare(strict_types=1);

/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
use Hyperf\ViewEngine\HyperfViewEngine;
use Hyperf\View\Mode;

return [
    // 使用的Blade模板引擎
    'engine' => HyperfViewEngine::class,
    // 不填写则默认为 Task 模式，推荐使用 Task 模式
    'mode' => Mode::SYNC,
    'config' => [
        // 若下列文件夹不存在请自行创建
        'view_path' => BASE_PATH . '/resources/views/',
        'cache_path' => BASE_PATH . '/runtime/view/',
    ],

    # 自定义组件注册
    'components' => [
        // 'alert' => \App\View\Components\Alert::class
    ],

    # 视图命名空间 (主要用于扩展包中)
    'namespaces' => [
         'admin' => BASE_PATH . '/resources/views/admin',
    ],
];

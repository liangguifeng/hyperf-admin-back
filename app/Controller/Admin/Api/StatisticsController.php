<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
namespace App\Controller\Admin\Api;

use App\Controller\Admin\Web\AdminAuthController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * 数据统计.
 *
 * Class StatisticsController.
 *
 * @Controller
 */
class StatisticsController extends AdminAuthController
{
    /**
     * 系统信息.
     *
     * @RequestMapping(path="/statistics/siteInfo", methods="post")
     *
     * @return array
     */
    public function siteInfo()
    {
        $data = [
            'installdate' => 367,
            'tagCount' => 42,
            'articleCount' => 51,
            'typeCount' => 3,
            'commentCount' => 5,
            'lastUpdateTime' => '2021年01月18日00点',
        ];

        return $this->success($data);
    }

    /**
     * 分类文章数统计.
     *
     * @RequestMapping(path="/statistics/listType", methods="post")
     *
     * @return array
     */
    public function listType()
    {
        $data = [
            [
                'name' => '后端技术',
                'value' => 45,
            ], [
                'name' => '其他文章',
                'value' => 8,
            ], [
                'name' => '前端技术',
                'value' => 2,
            ],
        ];

        return $this->success($data);
    }

    /**
     * 分类文章数统计.
     *
     * @RequestMapping(path="/statistics/listSpider", methods="post")
     *
     * @return array
     */
    public function listSpider()
    {
        $data = [
            [
                'name' => '谷歌',
                'value' => 1627,
            ],
            [
                'name' => '必应',
                'value' => 1602,
            ],
            [
                'name' => '搜狗蜘蛛',
                'value' => 1585,
            ],
            [
                'name' => '百度',
                'value' => 1109,
            ],
            [
                'name' => 'Adwords',
                'value' => 828,
            ],
            [
                'name' => '一搜蜘蛛',
                'value' => 346,
            ],
            [
                'name' => 'AhrefsBot',
                'value' => 322,
            ],
            [
                'name' => '站点分析蜘蛛',
                'value' => 277,
            ],
            [
                'name' => '360spider',
                'value' => 207,
            ],
            [
                'name' => 'MJ12bot',
                'value' => 189,
            ],
        ];

        return $this->success($data);
    }
}

<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
namespace App\Controller\Admin\Web;

use App\Middleware\Auth\AdminLoginMiddleware;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\RequestMapping;
use function Hyperf\ViewEngine\view;

/**
 * 登录页面控制器.
 *
 * Class LoginController
 *
 * @Middleware(AdminLoginMiddleware::class)
 *
 * @Controller
 */
class IndexController extends AdminAuthController
{
    /**
     * 管理后台首页.
     *
     * @RequestMapping(path="/", methods="get")
     *
     * @return \Hyperf\ViewEngine\Contract\FactoryInterface|\Hyperf\ViewEngine\Contract\ViewInterface
     */
    public function index()
    {
        dump($this->auth->guard('admin')->user());
        $data = [
            'config' => [
                'siteName' => '犯二青年博客',
            ],
            'message' => '',
            'enableCaptcha' => false,
        ];
        return view('admin.index', $data);
    }
}

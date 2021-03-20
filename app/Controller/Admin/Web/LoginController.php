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

use App\Controller\AbstractController;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use function Hyperf\ViewEngine\view;

/**
 * 登录页面控制器.
 *
 * Class LoginController
 *
 * @Controller
 */
class LoginController extends AbstractController
{
    /**
     * 登录页.
     *
     * @RequestMapping(path="/login", methods="get")
     *
     * @return \Hyperf\ViewEngine\Contract\FactoryInterface|\Hyperf\ViewEngine\Contract\ViewInterface
     */
    public function index()
    {
        $data = [
            'config' => [
                'siteName' => '犯二青年博客',
            ],
            'message' => '',
            'enableCaptcha' => false,
        ];

        return view('admin.login', $data);
    }
}

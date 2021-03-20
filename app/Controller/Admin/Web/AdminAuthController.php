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
use Hyperf\Di\Annotation\Inject;
use Hyperf\Validation\Contract\ValidatorFactoryInterface;
use Qbhy\HyperfAuth\AuthManager;
use function Hyperf\ViewEngine\view;

/**
 * 后台共用控制器.
 *
 * Class AdminAuthController.
 */
class AdminAuthController extends AbstractController
{
    /**
     * 注解加入Guard下admin的session.
     *
     * @Inject
     *
     * @var AuthManager
     */
    protected $auth;

    /**
     * 注解加入验证器.
     *
     * @Inject
     *
     * @var ValidatorFactoryInterface
     */
    protected $validationFactory;

    /**
     * 视图通用方法返回.
     *
     * @return \Hyperf\ViewEngine\Contract\FactoryInterface|\Hyperf\ViewEngine\Contract\ViewInterface
     */
    protected function view(string $view, array $data = [])
    {
        $systemConfig = [
            'user' => $this->auth->guard('admin')->user(),
            'config' => [
                'siteName' => '犯二青年博客',
                'siteUrl' => 'https://findcat.cn',
            ],
            'message' => '',
            'enableCaptcha' => false,
            'data' => $data,
        ];

        return view($view, $systemConfig);
    }
}

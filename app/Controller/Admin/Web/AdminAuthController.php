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
use Qbhy\HyperfAuth\AuthManager;

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
}

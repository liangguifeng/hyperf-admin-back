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

use App\Controller\AbstractController;
use App\Model\User;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\Validation\Contract\ValidatorFactoryInterface;
use Qbhy\HyperfAuth\AuthManager;

/**
 * 登录接口控制器.
 *
 * Class LoginController
 *
 * @Controller
 */
class LoginController extends AbstractController
{
    /**
     * @Inject
     *
     * @var AuthManager
     */
    protected $auth;

    /**
     * @Inject
     *
     * @var ValidatorFactoryInterface
     */
    protected $validationFactory;

    /**
     * 管理后台首页.
     *
     * @RequestMapping(path="/passport/signin", methods="post")
     *
     * @return array
     */
    public function login()
    {
        $validator = $this->validationFactory->make(
            $this->request->all(),
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => '用户名为必填项',
                'password.required' => '密码为必填项',
            ]
        );

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first();

            return $this->failed($errorMessage);
        }

        $user = User::query()->where('username', $this->request->input('username'))->first();

        if (! $user) {
            return $this->failed('用户名不存在');
        }

        if ($this->auth->guard('admin')->login($user)) {
            return $this->success('/', '登录成功！');
        }

        return $this->failed('登录失败！', '400');
    }

//    /**
//     * @Auth("session")
//     * @GetMapping(path="/logout")
//     */
//    public function logout()
//    {
//        $this->auth->guard('session')->logout();
//        return 'logout ok';
//    }
//
//    /**
//     * 使用 Auth 注解可以保证该方法必须通过某个 guard 的授权，支持同时传多个 guard，不传参数使用默认 guard
//     * @Auth("session")
//     * @GetMapping(path="/user")
//     * @return string
//     */
//    public function user()
//    {
//        $user = $this->auth->guard('session')->user();
//        return 'hello '.$user->name;
//    }
}

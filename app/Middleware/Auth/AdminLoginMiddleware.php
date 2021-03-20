<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */

namespace App\Middleware\Auth;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Qbhy\HyperfAuth\Authenticatable;
use Qbhy\HyperfAuth\AuthMiddleware;
use Qbhy\HyperfAuth\Exception\UnauthorizedException;

class AdminLoginMiddleware extends AuthMiddleware
{
    /**
     * 需要实现校验的guard
     *
     * @var string[]
     */
    protected $guards = ['admin'];


    /**
     * 管理后台中间件
     *
     * @param ServerRequestInterface  $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        foreach ($this->guards as $name) {
            //这里因为获取guard会被强行抛出异常，所以用try catch盖一下
            try {
                $guard = $this->auth->guard($name);

                if (!$guard->user() instanceof Authenticatable) {
                    throw new UnauthorizedException("Without authorization from {$guard->getName()} guard", $guard);
                }
            } catch (\Exception $exception) {
                return response()->redirect('/login');
            }
        }

        return $handler->handle($request);
    }
}

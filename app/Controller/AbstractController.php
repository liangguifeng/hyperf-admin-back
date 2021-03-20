<?php

declare(strict_types=1);
/**
 * hyperf-fanerblog.
 *
 * @link     https://findcat.cn
 * @document https://findcat.cn/about
 * @contact  1476982312@qq.com
 */
namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractController
{
    /**
     * @Inject
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @Inject
     * @var RequestInterface
     */
    protected $request;

    /**
     * @Inject
     * @var ResponseInterface
     */
    protected $response;

    /**
     * 请求成功
     *
     * @param $data
     * @param string $message
     *
     * @return array
     */
    public function success($data, $message = 'success')
    {
        $status = $this->response->getStatusCode();

        return ['message' => $message, 'status' => $status, 'data' => $data];
    }

    /**
     * 请求失败.
     *
     * @param string $message
     * @param $code
     * @param mixed $status
     *
     * @return array
     */
    public function failed($message = 'Request format error!', $status = 400)
    {
        return ['message' => $message, 'status' => $status, 'data' => ''];
    }
}

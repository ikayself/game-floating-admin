<?php

namespace App\Http\Controllers\common;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @Model
     */
    protected object $model;

    public function __construct()
    {
        $this->initialize();
    }

    // 初始化
    protected function initialize() {}

    /**
     * 成功返回
     *
     * @param mixed $data 返回数据
     * @param string $msg 提示信息
     * @param int $code 业务状态码
     * @param int $httpStatus HTTP状态码
     */
    protected function success(mixed $data = [], string $msg = 'success', int $code = 200, int $httpStatus = 200): JsonResponse
    {
        return response()->json([
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ], $httpStatus);
    }

    /**
     * 失败返回
     *
     * @param string $msg 错误提示信息
     * @param int $code 业务状态码
     * @param mixed $data 错误附加数据
     * @param int $httpStatus HTTP状态码
     */
    protected function error(string $msg = 'error', int $code = 400, mixed $data = [], int $httpStatus = 200): JsonResponse
    {
        return response()->json([
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ], $httpStatus);
    }
}

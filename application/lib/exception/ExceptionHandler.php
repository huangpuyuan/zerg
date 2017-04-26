<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/25
 * Time: 10:39
 */

namespace app\lib\exception;


use think\Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    //返回客户端当前请求的url路径

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {
            //  如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else {
            $this->code = 500;
            $this->msg = '服务器内置错误，不想告诉你哦';
            $this->errorCode = 999;
        }
        $request = Request::instance();

        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request->url()
        ];

        return json($result, $this->code);
    }
}
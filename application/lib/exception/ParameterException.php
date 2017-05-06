<?php
/**
 * Created by PhpStorm.
 * User: kaitai
 * Date: 2017/5/4
 * Time: 17:05
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400 ;
    public $msg = '参数错误';
    public $errorCode = 10000;
}
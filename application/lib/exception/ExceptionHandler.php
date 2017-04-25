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

class ExceptionHandler extends Handle
{
    public function render(Exception $ex)
    {
        return json('~~~~~~~~');
    }
}
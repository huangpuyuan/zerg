<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

// Route::rule('路由表达式','路由地址','请求类型 默认为*','路由参数'，'变量规则');
// Route::rule('hello','sample/Test/hello','GET',['https'=>false]);
//Route::rule('hello','sample/Test/hello','GET|POST',['https'=>false]);
Route::post('hello/:id','sample/Test/hello');

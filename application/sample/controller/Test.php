<?php
/**
* Created by PhpStorm.
 * User: Kaitai
* Date: 2017/4/23
* Time: 23:51
*/

namespace app\sample\controller;


use think\Request;

class Test
{
    public function hello()
    {
        $all = Request::instance()->param();

        var_dump($all);
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');
        // return 'hello world';
//        echo $id;
//        echo '|';
//        echo $name;
//        echo '|';
//        echo $age;
    }
}
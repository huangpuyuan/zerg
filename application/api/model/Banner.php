<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/25
 * Time: 10:06
 */

namespace app\api\model;


use think\Db;
use think\Exception;

class Banner
{
    public static function getBannerById($id)
    {

//  原生法      $result =  Db::query('SELECT * FROM banner_item WHERE banner_id=?',[$id]);
//    return $result;
//  查询构造器
        $result = Db::table('banner_item')
            ->where('banner_id', '=', $id)
            ->select();
//        where('字段名'，'表达式(可选参数默认为等于号)'，'查询条件');update ,delete,insert,find
        return $result;
    }
}
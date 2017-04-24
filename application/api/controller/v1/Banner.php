<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24
 * Time: 16:28
 */

namespace app   \api\controller\v1;

// use think\Validate;
use app\api\validate\TestValidate;

class Banner
{
    /*
     *  获取指定Id的bnnaer信息
     * @url /banner/:id
     * @http GET
     * @id banner 的id号
     * */
    public function getBanner($id)
    {
        // 独立验证和验证器 有很多默认验证规则

        $data = [
            'name' => 'vendor11111',
            'email' => 'vendorqq.com'
        ];

//        $validate = new Validate([
//           'name'=>'require|max:10',
//            'email'=> 'email'
//        ]);
//   验证器的封装性

        $validate = new TestValidate();
        $result = $validate->batch()->check($data);

        var_dump($validate->getError());


    }
}
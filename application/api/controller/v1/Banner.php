<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24
 * Time: 16:28
 */

namespace app   \api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use think\Exception;

class Banner
{
    /*
     *  验证器的封装性 拦截器
     *  获取指定Id的bnnaer信息
     * @url /banner/:id
     * @http GET
        * @id banner 的id号
    * */
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerById($id);

        return $banner;


    }
}
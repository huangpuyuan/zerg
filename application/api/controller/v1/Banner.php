<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24
 * Time: 16:28
 */

namespace app   \api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;

/**
 *  验证器的封装性 拦截器
 *  获取指定Id的bnnaer信息
 * @url /banner/:id
 * @http GET
 * @id banner 的id号
 */
class Banner
{

    /**
     * @param $id
     * @return \think\response\Json
     * @throws BannerMissException
     */
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerById($id);
        if (!$banner) {
            throw new BannerMissException();
        }
        return json($banner);


    }
}
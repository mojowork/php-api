<?php
/**
 * Created by PhpStorm.
 * User: chaoshuai
 * Date: 2018/7/26
 * Time: 13:05
 */

namespace app\api\controller\v1;


use app\api\validate\IdMustBePositiveInteger;

class Banner
{
    /***
     * @http GET
     * @desc 获取指定的id的banner信息
     * @param $id banner-id
     */
    public function getBanner($id){
        (new IdMustBePositiveInteger())->goCheck();
    }
}
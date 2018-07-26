<?php
/**
 * Created by PhpStorm.
 * User: chaoshuai
 * Date: 2018/7/26
 * Time: 14:26
 */

namespace app\api\validate;

use think\Exception;
use think\Validate;
use think\Request;

class BaseValidate extends Validate
{
    public function goCheck() {
        $req = Request::instance();
        $params = $req->param();
        $result = $this->check($params);
        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        } else {
            return true;
        }
    }
}
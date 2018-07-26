<?php
/**
 * Created by PhpStorm.
 * User: chaoshuai
 * Date: 2018/7/26
 * Time: 13:17
 */

namespace app\api\validate;


use app\api\validate\BaseValidate;

/***
 *  验证正整数
 */
class IdMustBePositiveInteger extends BaseValidate
{
    protected $rule = [
        'id' => 'require|positiveInt'
    ];

    // 自定义验证规则
    protected function positiveInt($value, $rule, $data, $field = '') {

        if(is_numeric($value)&&is_int($value + 0)&&($value + 0)>0){
            return true;
        } else {
            return $field.'必须是正整数';
        }

    }

//    protected function confirm($value, $rule, $data, $field = '')
//    {
//        if ('' == $rule) {
//            if (strpos($field, '_confirm')) {
//                $rule = strstr($field, '_confirm', true);
//            } else {
//                $rule = $field . '_confirm';
//            }
//        }
//        return $this->getDataValue($data, $rule) === $value;
//    }
}
<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/4
 * Time: 20:57
 */
namespace App\Services;

use App\Models\User as UserModel;

class User
{
    public static function listUser($params, $pagination, $oderBy = '')
    {

    }

    public static function save($data, $uid = 0)
    {
        $email = array_get($data, 'email');
        if (static::emailExists($email, $uid)) {
            throw new \Exception('Email has exists');
        }

        $model = UserModel::findOrNew($uid);
        $model->fill($data);
        $model->save();
    }

    /**
     * check user email exists or not
     * @param string $email
     * @param int $uid
     * @return mixed
     */
    public static function emailExists($email, $uid = 0)
    {
        return UserModel::email($email)->whereNot($uid)->exits();
    }

    public static function disableUser($uid)
    {

    }
}

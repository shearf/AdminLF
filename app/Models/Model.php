<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/5
 * Time: 00:33
 */

namespace App\Models;

/**
 * Class Model
 * @package App\Models
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;         // 不自动使用时间

    const CREATED_AT = 'create_time';   // 创建时间字段重命名

    const UPDATED_AT = 'update_time';   // 更新时间字段重命名

    protected $perPage = 20;            // Model默认分页20条

}
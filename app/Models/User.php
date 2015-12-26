<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/5
 * Time: 00:31
 */

namespace App\Models;

class User extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'uid';

    public $timestamps = true;

    protected $fillable = [
        'name', 'email', 'age', 'status'
    ];


    const STATUS_VALID      = 'V';
    const STATUS_INVALID    = 'I';
    const STATUS_CLOSED     = 'D';

    public function scopeEmail($query, $email)
    {
        return $query->where('email', $email);
    }
    
}

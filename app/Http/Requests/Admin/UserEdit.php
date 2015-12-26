<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/5
 * Time: 14:12
 */

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class UserEdit extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'integer|min:1',
        ];
    }
}
<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/11/14
 * Time: 18:09
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;

use Illuminate\Http\Request;

class AuthController extends AdminController
{
    public function login()
    {
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        $input = $request->all();
        $username = array_get($input, 'username');
        $password = array_get($input, 'password');

        if ($username == env('ADMIN_USERNAME') && $password == env('ADMIN_PASSWORD')) {

            \Session::put('ADMIN_AUTH', true);

            return redirect()->route('admin.main');
        } else {
            return redirect()->route('admin.login')->with('fail', 'Auth Fail');
        }
    }

    public function logout()
    {
        \Session::forget('ADMIN_AUTH');
        return redirect()->route('admin.login');
    }
}
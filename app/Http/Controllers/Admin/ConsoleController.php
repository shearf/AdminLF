<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/11/14
 * Time: 17:52
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;

class ConsoleController extends AdminController
{
    public function index()
    {
        return view('admin.main');
    }
}
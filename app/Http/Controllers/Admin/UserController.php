<?php

namespace App\Http\Controllers\Admin;

use App\Http\Forms\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\UserEdit;

use App\Services\User as UserService;

class UserController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.user.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $form = new User();
        return view('admin.user.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserEdit  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserEdit $request)
    {
        try {
            UserService::save($request->all());

            return view('admin.user.index')->with('message', 'New user created');
        } catch (\Exception $e) {

            return view('admin.user.create')->with('fail', 'Create user failed')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

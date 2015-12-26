@extends('admin._layout')

@section('content-head')
    <h1>
        Manage User
        <small>User List</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-dashboard"></i>User List</a></li>
        <li class="active">List</li>
    </ol>
@stop

@section('content')

    {{--    <a href="{{ route('admin.brand.create') }}" class="btn btn-primary margin-bottom">新增品牌</a>--}}

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">User List</h3>
            <a href="{{ route('admin.user.create') }}" class="btn btn-primary pull-right">create new user</a>
        </div>
        <div class="box-body">

            @include('admin.blocks.alert-success')
            @include('admin.blocks.alert-error')

            <form class="form-inline search-form" role="form">
                <div class="form-group">
                    <label for="name" >Email:</label>
                    <input type="text" name="name" id="name" class="form-control input-sm" placeholder="search username">
                </div>
                <div class="form-group">
                    <label for="start_time" >Create time range:</label>
                    <input type="date" name="start_time" id="start_time" class="form-control input-sm" placeholder="start datetime">
                    <input type="date" name="end_time" id="end_time" class="form-control input-sm" placeholder="end datetime">
                </div>
                <button class="btn btn-default" type="reset">reset</button>
                <button class="btn btn-info pull-right" type="submit">search</button>
            </form>
            <table class="table table-bordered table-hover">
                <!--
                <thead>
                    <tr>
                        <th><input type="text" name=""> </th>
                    </tr>
                </thead>
                -->
                <tbody>
                <tr>
                    <th>UID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Status</th>
                    <th>Create Time</th>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="box-footer">

        </div>
    </div>

@stop

{{--@include('admin.js.datatable')--}}

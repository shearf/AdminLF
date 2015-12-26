@extends('admin._layout')

@section('content-head')
    <h1>
        Create User
        <small>Create user</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.user.index') }}"><i class="fa fa-dashboard"></i>User List</a>
        </li>
        <li class="active">New</li>
    </ol>
@stop

@section('content')

    <div class="box box-primary">


        <div class="box-header with-border">
            <h3 class="box-title">Create New User</h3>
        </div>
        <form role="form" action="{{ route('admin.user.store') }}" method="post">
            <input type="hidden" name="_method" value="POST" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="box-body">
                @include('admin.blocks.alert-error')
                @include('admin.user.form')
            </div>
            <div class="box-footer">
                <button type="reset" class="btn btn-default">RESET</button>
                <button type="submit" class="btn btn-primary pull-right">SUBMIT</button>
            </div>
        </form>
    </div>
@stop
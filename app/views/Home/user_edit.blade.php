@extends('layouts.default')

@section('page_title') Users @stop

@section('head') Add New User @stop

@section('users') class="active" @stop

@section('breadcrumbs')

<li>
    <a href="{{{ route('dashboard') }}}"><i class="fa fa-dashboard"></i> Dashboard</a>
</li>
<li>
    <a href="{{{ route('users') }}}"><i class="fa fa-users"></i> Users</a>
</li>
<li>
    <i class="fa fa-user"></i> Add New User
</li>

@stop

@section('content')

<div class="col-lg-6 show-grid">

    {{ Form::model($user) }}

    <div class="col-xs-12 show-grid">
        {{ Form ::label('firstname','First Name') }}
        {{ Form ::text('firstname',null,array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12 show-grid">
        {{ Form ::label('middlename','Middle Name') }}
        {{ Form ::text('middlename',null,array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12 show-grid">
        {{ Form ::label('lastname','Last Name') }}
        {{ Form ::text('lastname',null,array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12 show-grid">
        {{ Form ::label('username','Username') }}
        {{ Form ::text('username',null,array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12 show-grid">
        {{ Form ::label('password','Password') }}
        {{ Form ::password('password',array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12 show-grid">
        {{ Form ::label('password_confirmation','Confirm Password') }}
        {{ Form ::password('password_confirmation',array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12 show-grid">
        {{ Form ::label('role_id','Role') }}
        {{ Form ::select('role_id', $roles,null,array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12 show-grid">
        {{ Form ::label('status','Status') }}
        {{ Form ::select('status',$status,null,array('class'=>'form-control')) }}
    </div>

    <div class="col-xs-12">
        {{ Form ::submit('Save',array('class'=>'btn btn-primary')) }}
        {{ link_to_route('users','Cancel','',array('class'=>'btn btn-default')) }}

    </div>
    {{ Form::close() }}

</div>

@stop
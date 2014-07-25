@extends('layouts.login')

@section('content')
<div class="middle-margin">

    <div class="well">

        <legend>Log in to continue</legend>

        {{ Form::open(array('action' => 'UserController@login')) }}
        <div class="form-group">
            {{ Form::text('username',Input::old('username'),array('class'=>'span3 form-control','placeholder'=>'Email Address')) }}
        </div>

        <div class="form-group">
            {{ Form::password('password',array('class'=>'span3 form-control','placeholder'=>'Password')) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Login',array('class'=>'btn-info btn','placeholder'=>'Password')) }}

            {{ link_to_action('UserController@forgot_password', 'Forgot Password', $parameters = array(), $attributes = array('class'=>'btn btn-default')) }}
        </div>

        {{ Form::close() }}

    </div>

</div>
@stop
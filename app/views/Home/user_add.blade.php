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

<div class="col-lg-12">


</div>

@stop
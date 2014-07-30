@extends('layouts.default')

@section('page_title') Users @stop

@section('head') Users @stop

@section('users') class="active" @stop

@section('breadcrumbs')

<li>
    <a href="{{{ route('dashboard') }}}"><i class="fa fa-dashboard"></i> Dashboard</a>
</li>
<li>
    <i class="fa fa-users"></i> Users
</li>

@stop

@section('content')

<div class="row col-lg-12 show-grid">

    <div class="btn-toolbar" role="toolbar">

        <a class="btn-info btn" href="{{{ route('user_add') }}}">Add New User</a>

    </div>

</div>

<div class="row show-grid">

    <div class="col-lg-12">

        <div id="ajax-loading" class="row-fluid full-content" style="display: none;">

            <div class="span12 pagination-centered"><img src="{{ Asset('/images/loading.gif') }}" alt="header" class="img-responsive center-block" /></div>

        </div>

        <div id="ajax-paginate-content">

            @include('Home.user_list')

        </div>

    </div>

</div>

@stop
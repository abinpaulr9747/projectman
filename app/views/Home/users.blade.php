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

        <table class="table table-bordered table-striped">
            <thead>
                <th>
                    Id
                </th>
                <th>
                    Name
                </th>
                <th>
                    Username
                </th>
                <th>
                    Role
                </th>
                <th>
                    Status
                </th>
                <th>
                    Created at
                </th>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{{ $user->id }}}</td>
                        <td>{{{ $user->firstname.' '.$user->middlename.' '.$user->lastname }}}</td>
                        <td>{{{ $user->username }}}</td>
                        <td>{{{ $user->role->role }}}</td>
                        <td>
                            @if($user->status == 1)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td>{{{ date('Y-m-d H:i:s', strtotime($user->created_at)) }}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6"> No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

</div>

@stop
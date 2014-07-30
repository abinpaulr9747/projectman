<table class="table table-bordered table-striped">
    <thead>
    <th> Id</th>
    <th> Name</th>
    <th> Username</th>
    <th> Role</th>
    <th> Status</th>
    <th> Created at</th>
    <th> Actions</th>
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
        <td>{{ link_to_route('user_edit','Edit',array($user->id),array('class'=>'btn btn-info')) }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="6"> No users found.</td>
    </tr>
    @endforelse
    </tbody>
</table>

{{ $users->links() }}
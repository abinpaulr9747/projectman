<table class="table table-bordered table-striped">
    <thead>
        <th> {{ link_to_route('users','Id',array('sort'=>'id')) }}  <i class="fa pull-right {{ $sort_column == 'id' ? 'fa-sort-'.$sort_dir : 'fa-sort' }}"></i></th>
        <th> {{ link_to_route('users','Name',array('sort'=>'fullname')) }} <i class="fa pull-right {{ $sort_column == 'fullname' ? 'fa-sort-'.$sort_dir : 'fa-sort' }}"></i></th>
        <th> {{ link_to_route('users','Username',array('sort'=>'username')) }} <i class="fa pull-right {{ $sort_column == 'username' ? 'fa-sort-'.$sort_dir : 'fa-sort' }}"></i></th>
        <th> {{ link_to_route('users','Role',array('sort'=>'role_id')) }}  <i class="fa pull-right {{ $sort_column == 'role_id' ? 'fa-sort-'.$sort_dir : 'fa-sort' }}"></i></th>
        <th> {{ link_to_route('users','Status',array('sort'=>'status')) }}  <i class="fa pull-right {{ $sort_column == 'status' ? 'fa-sort-'.$sort_dir : 'fa-sort' }}"></i></th>
        <th> {{ link_to_route('users','Created at',array('sort'=>'created_at')) }}   <i class="fa pull-right {{ $sort_column == 'created_at' ? 'fa-sort-'.$sort_dir : 'fa-sort' }}"></i></th>
        <th> Actions</th>
    </thead>
    <tbody>
    @forelse($users as $user)
    <tr>
        <td>{{{ $user->id }}}</td>
        <td>{{{ $user->fullname }}}</td>
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
        <td>{{ link_to_route('user_edit','Edit',array($user->id),array('class'=>'btn btn-primary')) }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="6"> No users found.</td>
    </tr>
    @endforelse
    </tbody>
</table>

{{ $users->links() }}
<tr>
    <td>
        {{ $user->name }}
    </td>
    <td>
        {{ $user->email }}
    </td>
    <td>
        {!! $user->getStateForTable() !!}
    </td>
    <td>
        {!! $user->getOrganizationsForTable() !!}
    </td>
    <td>
        {!! $user->getStateBadge() !!}
    </td>
    <td>
        @can('edit_user')
            <a href="{{ route('user.edit', ["id" => $user->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        @endcan
        @can('request_change_password_user')
            <a href="{{ route('user.request-change-password', ["id" => $user->id]) }}" class="btn btn-danger"><i class="fa fa-undo"></i></a>
        @endcan
        @can('delete_user')
            <a href="{{ route('user.delete', ["id" => $user->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        @endcan
    </td>
</tr>

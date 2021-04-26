<tr>
    <td>
        {{ $role->name }}
    </td>
    <td>
        <a href="{{ route('roles.edit', ["id" => $role->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
    </td>
</tr>

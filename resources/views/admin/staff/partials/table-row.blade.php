<tr>
    <td>
        {{ $employee->name }}
    </td>
    <td>
        <a href="{{ route('admin.staff.edit', ["id" => $employee->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        <a href="{{ route('admin.staff.delete', ["id" => $employee->id]) }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>

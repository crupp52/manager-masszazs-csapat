<tr>
    <td>
        {{ $service->title }}
    </td>
    <td>
        <a href="{{ route('admin.service.edit', ["id" => $service->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        <a href="{{ route('admin.service.delete', ["id" => $service->id]) }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
    </td>
</tr>

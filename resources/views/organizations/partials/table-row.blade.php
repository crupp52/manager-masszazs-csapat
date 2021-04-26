<tr>
    <td>
        {{ $organization->name }}
    </td>
    <td>
        {!! $organization->getStateBadge() !!}
    </td>
    <td>
        @can('edit_organization')
            <a href="{{ route('organization.edit', ["id" => $organization->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        @endcan
        @can('delete_organization')
            <a href="{{ route('organization.delete', ["id" => $organization->id]) }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
        @endcan
    </td>
</tr>

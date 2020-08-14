<tr>
    <td>
        {!! $document->getReferenceNumber() !!}
    </td>
    <td>
        {{ $document->name }}
    </td>
    <td>
        {{ $document->addressee }}
    </td>
    <td>
        {{ date('Y.m.d.', strtotime($document->date)) }}
    </td>
    <td>
        {{ $document->user->name }}
    </td>
    <td>
        {{ $document->filename }}
    </td>
    <td>
        {{ $document->description }}
    </td>
    <td>
        @can('edit_document')
            <a href="{{ route('document.edit', ["id" => $document->id]) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        @endcan
        @can('download_document')
            <a href="{{ route('document.download', ["id" => $document->id]) }}" class="btn btn-success"><i class="fa fa-download"></i></a>
        @endcan
        @can('delete_document')
            <a href="{{ route('document.delete', ["id" => $document->id]) }}" class="btn btn-danger confirm-delete-item"><i class="fa fa-times"></i></a>
        @endcan
    </td>
</tr>

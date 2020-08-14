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
</tr>

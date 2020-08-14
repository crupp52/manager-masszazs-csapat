<table>
    <thead>
    <tr>
        <th>Dátum</th>
        <th>Cégnév</th>
        <th>Szervezeti egység</th>
        <th>Összeg</th>
    </tr>
    </thead>
    <tbody>
    @foreach($documents as $document)
        <tr>
            <td>
                {{ $document->date }}
            </td>
            <td>
                {{ $document->company_name }}
            </td>
            <td>
                {{ $document->organization->name }}
            </td>
            <td>
                {{ $document->amount }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@extends('dashboard.base')

@section('content')
    @include('documents.partials.filter')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><a class="btn btn-success" href="{{ route('document.index', ['year' => $year, 'organization' => $organization]) }}"><i class="fas fa-long-arrow-alt-left"></i> Vissza</a> Dokumentumok</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            <th>Iktatószám</th>
                            <th>Megnevezés</th>
                            <th>Címzett</th>
                            <th>Dátum</th>
                            <th>Létrehozta</th>
                            <th>Fájl neve</th>
                            <th>Megjegyzés</th>
                            <th>Szerkesztés</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($documents as $document)
                            @include('documents.partials.index-document-table-row')
                        @empty
                            <tr>
                                <td colspan="8">Egy dokumentum sem található...</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Új iktatás</div>
                <div class="card-body">
                    {!! form($form) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Dokumentumok</div>
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
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($documents as $document)
                            @include('documents.partials.index-document-form-table-row')
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

@push('script')
    <script src="{{ asset('js/document.js') }}"></script>
@endpush

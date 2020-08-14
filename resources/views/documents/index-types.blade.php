@extends('dashboard.base')

@section('content')
    @include('documents.partials.filter')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><a class="btn btn-success" href="{{ route('document.index', ['year' => $year]) }}"><i class="fas fa-long-arrow-alt-left"></i> Vissza</a> Típusok</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            <th>Típus</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($types as $type)
                            <tr>
                                <td>
                                    <a href="{{ route('document.index', ['year' => $year, 'organization' => $organization, 'type' => $type]) }}">{{ $type }}</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Egy dokumentum sem található...</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

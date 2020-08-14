@extends('dashboard.base')

@section('content')
    @include('documents.partials.filter')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><a class="btn btn-success" href="{{ route('document.index') }}"><i class="fas fa-long-arrow-alt-left"></i> Vissza</a> Szervezeti egységek</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            <th>Szervezeti egység</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($organizations as $organization)
                            <tr>
                                <td>
                                    <a href="{{ route('document.index', ['year' => $year, 'organization' => $organization]) }}">{{ $organization }}</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Egy szervezeti egység sem található...</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Szervezeti egységek
                    <div class="card-body">
                        @can('create_organization')
                            <div class="form-group">
                                <a href="{{ route('organization.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Új szervezeti egység</a>
                            </div>
                        @endcan
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Név</th>
                                <th>Állapot</th>
                                <th>Műveletek</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($organizations as $organization)
                                <tr>
                                    @include('organizations.partials.table-row')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Egy szervezeti egység sem található...</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

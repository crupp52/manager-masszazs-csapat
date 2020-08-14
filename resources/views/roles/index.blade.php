@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Szerepkörök
                    <div class="card-body">
                        <div class="form-group">
                            <a href="{{ route('roles.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Új szerepkör</a>
                        </div>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Név</th>
                                <th>Műveletek</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    @include('roles.partials.table-row')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">Egy szerepkör sem található...</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Felhasználók
                    <div class="card-body">
                        @can('create_user')
                            <div class="form-group">
                                <a href="{{ route('user.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Új felhasználó</a>
                            </div>
                        @endcan
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Név</th>
                                <th>Email</th>
                                <th>Jogosultásgok</th>
                                <th>Szervezeti egységek</th>
                                <th>Állapot</th>
                                <th>Műveletek</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    @include('users.partials.table-row')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Egy felhasználó sem található...</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

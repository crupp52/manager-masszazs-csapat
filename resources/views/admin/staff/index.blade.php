@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Munkatársak
                    <div class="card-body">
                        <div class="form-group">
                            <a href="{{ route('admin.staff.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Új munkatárs</a>
                        </div>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Név</th>
                                <th>Műveletek</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($staff as $employee)
                                <tr>
                                    @include('admin.staff.partials.table-row')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">Egy munkatárs sem található...</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

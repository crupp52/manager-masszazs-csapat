@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Szolgáltatások
                    <div class="card-body">
                        <div class="form-group">
                            <a href="{{ route('admin.service.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Új szolgáltatás</a>
                        </div>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th>Név</th>
                                <th>Műveletek</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($services as $service)
                                <tr>
                                    @include('admin.services.partials.table-row')
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Egy szolgáltatás sem található...</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

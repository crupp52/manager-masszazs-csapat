@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Szervezeti egységek</div>
                <div class="card-body">
                    {!! form($form) !!}
                </div>
            </div>
        </div>
    </div>
@endsection

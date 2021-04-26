@extends('dashboard.base')

@section('content')
    @include('documents.partials.filter')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Évek</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                        <tr>
                            <th>Év</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($years as $year)
                            <tr>
                                <td>
                                    <a href="{{ route('document.index', ['year' => $year]) }}">{{ $year }}</a>
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

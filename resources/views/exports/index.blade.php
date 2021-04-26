@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Export</div>
                <div class="card-body">
                    <form action="{{ route('export.excel') }}" method="post">
                        @csrf()
                        <div class="row">
                            <div class=" form-group col-3">
                                <label for="start_date">Kezdődátum</label>
                                <input class="form-control" id="start-date" type="date" name="start_date" placeholder="2000.01.01.">
                                <button type="button" id="start-date-clear-button" class="btn bg-transparent" style="position: absolute; top: 29px; right: 40px; display: none;">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                            <div class="form-group col-3">
                                <label for="end_date">Végdátum</label>
                                <input class="form-control" id="end-date" type="date" name="end_date" placeholder="2000.12.31.">
                                <button type="button" id="end-date-clear-button" class="btn bg-transparent" style="position: absolute; top: 29px; right: 40px; display: none;">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                            @role('admin')
                            <div class="form-group col-3">
                                <label for="organizations[]">Szervezeti egységek</label>
                                <select class="js-example-basic-multiple" name="organizations[]" multiple="multiple" style="width: 100%">
                                    @foreach(\Illuminate\Support\Facades\Auth::user()->organizations as $organization)
                                        <option value="{{ $organization->id }}">{{$organization->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endrole
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success btn-block">Export</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const selected_organizations = {!! json_encode([]) !!}
    </script>
@endsection

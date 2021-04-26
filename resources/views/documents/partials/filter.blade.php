<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Szűrés</div>
            <div class="card-body">
                <form action="{{ route('document.filter') }}" method="post">
                    @csrf()
                    <div class="row">
                        <div class="form-group col-2">
                            <label for="reference_number">Iktatószám</label>
                            <input class="form-control" id="reference_number" type="text" name="reference_number" placeholder="pl. OE-NIK-HÖK-002/20" value="{{ isset($filter_parameters) ? $filter_parameters['reference_number'] : '' }}">
                            <button type="button" id="filename-clear-button" class="btn bg-transparent" style="position: absolute; top: 29px; right: 20px; display: none;">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <div class="form-group col-3">
                            <label for="filename">Fájlnév</label>
                            <input class="form-control" id="filename" type="text" name="filename" placeholder="pl. szamla.pdf" value="{{ isset($filter_parameters) ? $filter_parameters['filename'] : '' }}">
                            <button type="button" id="filename-clear-button" class="btn bg-transparent" style="position: absolute; top: 29px; right: 20px; display: none;">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <div class=" form-group col-2">
                            <label for="start_date">Kezdődátum</label>
                            <input class="form-control" id="start-date" type="date" name="start_date" placeholder="2000.01.01." value="{{ isset($filter_parameters) ? $filter_parameters['start_date'] : '' }}">
                            <button type="button" id="start-date-clear-button" class="btn bg-transparent" style="position: absolute; top: 29px; right: 40px; display: none;">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <div class="form-group col-2">
                            <label for="end_date">Végdátum</label>
                            <input class="form-control" id="end-date" type="date" name="end_date" placeholder="2000.12.31." value="{{ isset($filter_parameters) ? $filter_parameters['end_date'] : '' }}">
                            <button type="button" id="end-date-clear-button" class="btn bg-transparent" style="position: absolute; top: 29px; right: 40px; display: none;">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                        <div class="form-group col-3">
                            <label for="organizations[]">Szervezeti egységek</label>
                            <select class="js-example-basic-multiple" name="organizations[]" multiple="multiple" style="width: 100%">
                                @foreach(\Illuminate\Support\Facades\Auth::user()->organizations as $organization)
                                    <option value="{{ $organization->id }}">{{$organization->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Szűrés</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const selected_organizations = {!! isset($filter_parameters) ? json_encode($filter_parameters['organizations']) : json_encode([]) !!}
</script>

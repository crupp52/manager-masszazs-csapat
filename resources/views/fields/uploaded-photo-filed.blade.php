<div class="col-lg-3 mb-5">
    <img class="img-fluid" src="{{ $options['url'] }}" style="height: auto">
    <a href="{{ route('admin.service-photo.delete', ['id' => $options['id']]) }}"><button type="button" class="btn btn-danger w-100 mt-3">Törlés</button></a>
</div>

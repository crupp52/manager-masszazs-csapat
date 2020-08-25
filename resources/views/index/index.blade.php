@extends('layout.main')

@section('content')

    <div class="ftco-blocks-cover-1" style="">
        <div class="site-section-cover overlay" style="height: 100vh;background-image: url('{{ asset('customer/images/hero/hero1.jpg') }}')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7" style="margin-top: 30vh;">
                        {{--                        <h1 class="mb-3">Spa Which You Love</h1>--}}
                        <p>Amennyiben Ön munkáltató, akkor valószínűleg kipihent, nagyobb munkakedvű, lojális és produktívabb munkaerőt szeretne...</p>
                        <p>Amennyiben Ön munkavállaló, szeretné, ha teljesítményét a vezetőség is értékelné...</p>
                        <p><a href="javascript: jumpToContent()" class="btn btn-primary">Tudjon meg többet</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 blog-content">
                    {!! $service->description !!}
                </div>

            </div>
        </div>
    </div>
@endsection

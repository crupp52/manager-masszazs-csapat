@extends('layout.main')

@section('content')

    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('{{ asset('customer/images/hero/hero1.jpg') }}')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">Csapatunk</h1>
                        <p><a href="javascript: jumpToContent()" class="btn btn-primary">Tudjon meg többet</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light" id="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading-border-bottom font-weight-bold serif text-black mb-5 text-center">A Csapat</h2>
                    <p style="text-align: center">Minden masszőr végzi a következő masszazsokat: manager, frissítő, svéd, relaxalo hát és teljes test masszázst.</p>
                </div>
            </div>
            <div class="row align-items-stretch">

                @foreach($staff as $employee)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100 person-1">
                            @if(isset($employee->filename))
                                <img style="max-width: 200px;max-height: 200px;width: auto;height: auto;" src="{{ asset('storage/images/' . $employee->filename) }}" alt="Image" class="img-fluid">
                            @endif
                            <div class="post-entry-1-contents">
                                <h2>{{ $employee->name }}</h2>
                                <div style="text-align: left">
                                    {!! $employee->description !!}
                                </div>
                                {{--                            <p>Frissítő svéd relaxáló teljes test masszázs, manager masszázs, frissítő arcmasszázs, talpmasszázs, hátmasszázs.</p>--}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

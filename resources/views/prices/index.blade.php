@extends('layout.main')

@section('content')

    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('{{ asset('customer/images/hero/hero1.jpg') }}')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">Áraink</h1>
                        <p><a href="javascript: jumpToContent()" class="btn btn-primary">Tudjon meg többet</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" id="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="heading-border-bottom font-weight-bold serif text-black mb-5 text-center">Árak</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 blog-content">
                    <p>Minden szolgáltatás egyedi árazású, ami függ a létszámtól, hogy hány masszőr szükséges, hová kell helyileg menni, valamint milyen masszázsról beszélünk. Kedvezmények és grátiszok abszolút opciók! Ezek kiindulási árak, egyedileg kérjen árajánlatot telefonon vagy írásos formában.</p>
                    <p class="lead">Manager masszázs</p>
                    <ul>
                        <li>2000 Ft. / fő / 15 perc / masszőr + utazási költség</li>
                    </ul>
                    <p class="lead">Masszázs órák rendezvényekre/családokhoz kiérkezve</p>
                    <ul>
                        <li>30 perc: 3000 Ft. / fő</li>
                        <li>60 perc: 5000 Ft. / fő</li>
                        <li>Csoportos kedvezmény igénybe vehető</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="font-weight-bold serif text-black mb-5 text-center"> </h1>
                </div>
            </div>
        </div>

@endsection

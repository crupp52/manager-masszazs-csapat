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
                    {{--                    <p class="lead">Amennyiben Ön munkáltató, akkor valószínűleg kipihent, nagyobb munkakedvű, lojális és produktívabb munkaerőt szeretne. Amennyiben Ön munkavállaló, szeretné, ha teljesítményét a vezetőség is értékelné.</p>--}}
                    <p class="lead">Üdvözlöm, Horváth Viktória vagyok. Hetedik éve foglalkozom masszázzsal aktívan. A masszázs, mint szolgáltatás egyre népszerűbb, egyre több helyen található meg.</p>
                    <p>Azonban masszázs és masszázs között is hatalmas különbség van! Gondolom ezt Önök is, tapasztalták már! Ez függ a masszázs típusától, a masszőr személyétől és tudásától, a környezettől és a masszírozandó alanytól.</p>
                    <p>Különleges masszőr-csapat vagyunk, akik kicsit többet adnak a szolgáltatáshoz, mint az átlag. (Természetesen az etikai szabályokat betartva csak tisztességes ún. hagyományos masszázsokról lévén szó!) Önöknek nem kell keresgélni! Csapatommal felkeressük Önt, és szívesen tájékoztatjuk a szolgáltatásainkról.</p>
                    <p>Részletekért és árajánlatért keressen bizalommal!</p>
                </div>

            </div>
        </div>
    </div>
@endsection

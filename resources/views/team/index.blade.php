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

                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="post-entry-1 h-100 person-1">
                        <img src="{{ asset('images/team/horvath_viktoria.jpg') }}" alt="Image" class="img-fluid">
                        <div class="post-entry-1-contents">
                            <h2>Horváth Viktória</h2>
                            <ul style="text-align: left">
                                <li>Frissítő, reflexológiai jellegű és thai talpmasszázs</li>
                                <li>Frissítő arc-es dekoltázs masszázs</li>
                                <li>Triggerpont</li>
                                <li>Nyirokmasszazs</li>
                                <li>Egyéb energiák: reiki, orosz, prána, access</li>
                            </ul>
{{--                            <p>Frissítő svéd relaxáló teljes test masszázs, manager masszázs, frissítő arcmasszázs, talpmasszázs, hátmasszázs. Triggerpont terápia, nyirok masszázs, thai talpmasszázs, talpmasszázs reflexológiai jellegű, baba masszázs, reiki mester/tanár, orosz energia (Vörös Mária), prána 1,2,3. Access: Face Lifting (arc fiatalítás), függőségek-kedélybetegslgek oldása.</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="post-entry-1 h-100 person-1">
                        <img src="{{ asset('images/team/kmetti_balazs.jpg') }}" alt="Image" class="img-fluid">
                        <div class="post-entry-1-contents">
                            <h2>Kmetti Balázs</h2>
                            <ul style="text-align: left">
                                <li>Tradicionális thai masszázs</li>
                                <li>Reiki</li>
                            </ul>
{{--                            <p>Frissítő svéd relaxáló teljes test masszázs, manager masszázs, frissítő arcmasszázs, talpmasszázs, hátmasszázs. Tradicionális thai masszázs</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="post-entry-1 h-100 person-1">
                        <img src="{{ asset('images/team/romhanyi_david.jpg') }}" alt="Image" class="img-fluid">
                        <div class="post-entry-1-contents">
                            <h2>Romhányi Dávid</h2>
                            <ul style="text-align: left">
                                <li>Frissítő arc és dekoltázs masszázs</li>
                                <li>Frissítő talpmasszázs</li>
                                <li>Energiák: Access</li>
                            </ul>
{{--                            <p>Frissítő svéd relaxáló teljes test masszázs, manager masszázs, frissítő arcmasszázs, talpmasszázs, hátmasszázs, energetizáló masszázs, relaxációs masszázs és Access</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="post-entry-1 h-100 person-1">
                        <img src="{{ asset('images/team/lehotzki_gabriella.jpg') }}" alt="Image" class="img-fluid">
                        <div class="post-entry-1-contents">
                            <h2>Lehotzki Gabriella</h2>
                            <ul style="text-align: left">
                                <li>Frissítő arc és dekoltázs masszázs</li>
                                <li>Frissítő talpmasszázs</li>
                            </ul>
{{--                            <p>Frissítő svéd relaxáló teljes test masszázs, manager masszázs, frissítő arcmasszázs, talpmasszázs, hátmasszázs.</p>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="post-entry-1 h-100 person-1">
                        <img src="{{ asset('images/team/toth_eva.jpg') }}" alt="Image" class="img-fluid">
                        <div class="post-entry-1-contents">
                            <h2>Tóth Éva</h2>
                            <ul style="text-align: left">
                                <li>Frissítő arc és dekoltázs masszázs</li>
                                <li>Frissítő talpmasszázs</li>
                                <li>Lélekmasszázs</li>
                            </ul>
{{--                            <p>Frissítő svéd relaxáló teljes test masszázs, manager masszázs, frissítő arcmasszázs, talpmasszázs, hátmasszázs.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

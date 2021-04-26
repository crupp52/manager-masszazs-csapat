@extends('layout.main')

@section('content')

    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('{{ asset('customer/images/hero/hero1.jpg') }}')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h1 class="mb-3">Lépjen velünk kapcsolatba!</h1>
                        <p><a href="javascript: jumpToContent()" class="btn btn-primary">Tudjon meg többet</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light" id="content">
        <div class="container">
{{--            <div class="row justify-content-center text-center">--}}
{{--                <div class="col-7 text-center mb-5">--}}
{{--                    <h2>Contact Us Or Use This Form To Rent A Car</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
{{--                <div class="col-lg-8 mb-5">--}}
{{--                    <form action="#" method="post">--}}
{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 mb-4 mb-lg-0">--}}
{{--                                <input type="text" class="form-control" placeholder="First name">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <input type="text" class="form-control" placeholder="First name">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input type="text" class="form-control" placeholder="Email address">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 mr-auto">--}}
{{--                                <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <div class="col-12">
                    <div class="bg-white p-3 p-md-5">
                        <h3 class="text-black mb-4">Elérhetőségek</h3>
                        <ul class="list-unstyled footer-link">
{{--                            <li class="d-block mb-3">--}}
{{--                                <span class="d-block text-black">Address:</span>--}}
{{--                                <span>34 Street Name, City Name Here, United States</span></li>--}}
                            <li class="d-block mb-3"><span class="d-block text-black">Telefon:</span><span>+36703198836</span></li>
                            <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>hello@managermasszazscsapat.hu</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

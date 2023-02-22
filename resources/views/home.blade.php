@extends('layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')



    <section data-anim-wrap class="masthead -type-5 mt-50">
        <div class="masthead__bg"></div>

        <div class="pl-lg-45 pr-lg-30 pl-20 pr-15">
            <div class="row y-gap-50 items-center">
                <div class="col-lg-6">
                    <div class="masthead__content mt-30">
                        <div data-anim-child="slide-up delay-2" class="text-17 lh-15 text-orange-1 fw-500 mb-10">
                            Discipline and Knowledge
                        </div>
                        <h1 data-anim-child="slide-up delay-2" class="masthead__title">
                            Welcome to
                            Directorate of Command Schools Services
                        </h1>
                        <!--
                        <p data-anim-child="slide-up delay-3" class="mt-5">
                            You can access 7900+ different courses from 600<br class="lg:d-none">
                            professional trainers for free
                        </p>
                        -->
                        <div data-anim-child="slide-up delay-4" class="row items-center x-gap-20 y-gap-20 pt-20">
                            <div class="col-auto">
                                <a href="{{ route("register") }}" class="button -md -orange-1 text-white">Enroll Now</a>
                            </div>
                        </div>

                        <div data-anim-child="slide-up delay-5" class="row x-gap-20 y-gap-20 items-center pt-60 lg:pt-30">

                            <div class="col-xl-4 col-auto">
                                <div class="text-dark-1">
                                    <div class="mr-10">
                                        <img src="{{ asset("img/home-8/hero/icons/1.svg") }}" alt="icon">
                                    </div>
                                    <div class="fw-500 lh-11 mt-10">30<br> BOARDING SCHOOLS</div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-auto">
                                <div class="text-dark-1">
                                    <div class="mr-10">
                                        <img src="{{ asset("img/home-8/hero/icons/1.svg") }}" alt="icon">
                                    </div>
                                    <div class="fw-500 lh-11 mt-10">16<br> DAY SCHOOLS</div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-auto">
                                <div class="text-dark-1">
                                    <div class="mr-10">
                                        <img src="{{ asset("img/home-8/hero/icons/1.svg") }}" alt="icon">
                                    </div>
                                    <div class="fw-500 lh-11 mt-10">46<br> TOTAL SCHOOLS</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div data-anim-child="slide-up delay-6" class="masthead__image">
                        <section data-anim-wrap class="mainSlider -type-1 js-mainSlider">
                            <div id="owl-carousel" class="owl-carousel owl-theme">
                                <div class="item"><img height="300" style="height: 550px;" src="{{ asset('banner/banner1.jpeg') }}"/></div>
                                <div class="item"><img height="300" style="height: 550px;" src="{{ asset('banner/banner2.jpeg') }}"/></div>
                                <div class="item"><img height="300" style="height: 550px;"   src="{{ asset('banner/banner3.jpeg') }}"/> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection


@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold">RELEASE OF LIST OF SUCCESSFUL CANDIDATES FOR ADMISSION INTO JSS1 IN COMMAND SECONDARY SCHOOLS 2023/2024 ACADEMIC SESSION. <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a></marquee>
    </div>
@endsection

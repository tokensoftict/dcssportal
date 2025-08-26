@extends('layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')
    <br/> <br/> <br/> <br/> <br/><br/> <br/>
  <div class="container-fluid">
      <section data-anim-wrap class="masthead">
          <div class="rev_slider_wrapper fullscreen-container">
              <div id="slider" class="rev_slider fullscreenbanner rs-nav-light" data-version="5.4.1">
                  <ul>

                      <li data-transition="fade" data-nav-color="light"><img src="{{ asset('banner/banner-first.jpeg') }}" alt="" />
                          <div class="tp-caption w-regular color-red shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['-35','-35','-55','-50']"
                               data-fontsize="['50','50','50','36']"
                               data-lineheight="['60','60','60','46']"
                               data-width="['1100','980','600','450']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9;color: #ff0">


                            <!--
                          <div class="tp-caption w-light shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['35','35','55','50']"
                               data-fontsize="['28','28','28','22']"
                               data-lineheight="['38','38','38','32']"
                               data-width="['1100','980','600','400']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9; background-color: rgba(20,3,66, 0.75); height: auto; padding-bottom: 50px; padding-top: 50px; color: #FFF; border-radius: 10px;">
                              <h2 style="color:#FFFF">

                              </h2>


                              <center> <a class="button -md mt-5 -red-1 align-content-center text-white fw-500 w-1/3"

                                          data-x="center"
                                          data-hoffset="['-25','-25','40','50']"
                                          data-y="middle"
                                          data-voffset="['110','-10','150','150']"
                                          data-width="['auto','auto','auto','auto']"
                                          data-textAlign="['center','center','center','center']"

                                          data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                          data-responsive="on"
                                          data-responsive_offset="on"
                                          style="z-index: 9;" href='{{ route('candidates') }}'>Successful Candidates
                                  </a></center>
                              -->
                              @if(  time() > strtotime($session->registration_begins) && time() < strtotime($session->registration_ends))

                                  <center> <a class="button -md mt-5 -red-1 align-content-center text-white fw-500 w-1/5"

                                         data-x="center"
                                         data-hoffset="['-25','-25','40','50']"
                                         data-y="middle"
                                         data-voffset="['110','-10','150','150']"
                                         data-width="['auto','auto','auto','auto']"
                                         data-textAlign="['center','center','center','center']"

                                         data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                         data-responsive="on"
                                         data-responsive_offset="on"
                                         style="z-index: 9;" href='{{ route('register') }}'>Enroll!
                                 </a></center>
                              @endif
                          </div>

                      </li>
                      <li data-transition="fade" data-nav-color="light"><img src="{{ asset('banner/banner2025-3-cropped.jpg') }}" alt="" />
                          <div class="tp-caption w-regular color-red shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['-35','-35','-55','-50']"
                               data-fontsize="['50','50','50','36']"
                               data-lineheight="['60','60','60','46']"
                               data-width="['1100','980','600','450']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9;color: #ff0">

                          <!--
                          <div class="tp-caption w-light shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['35','35','55','50']"
                               data-fontsize="['28','28','28','22']"
                               data-lineheight="['38','38','38','32']"
                               data-width="['1100','980','600','400']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9; background-color: rgba(20,3,66, 0.75); height: auto; padding-bottom: 50px; padding-top: 50px; color: #FFF; border-radius: 10px;">
                              <h2 style="color:#FFFF">

                              </h2>
                                <br/>
                              <br/>

                              <center> <a class="button -md mt-5 -red-1 align-content-center text-white fw-500 w-1/3"

                                          data-x="center"
                                          data-hoffset="['-25','-25','40','50']"
                                          data-y="middle"
                                          data-voffset="['110','-10','150','150']"
                                          data-width="['auto','auto','auto','auto']"
                                          data-textAlign="['center','center','center','center']"

                                          data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                          data-responsive="on"
                                          data-responsive_offset="on"
                                          style="z-index: 9;" href='{{ route('candidates') }}'>Successful Candidates
                                  </a></center>
                                  -->
                              @if(  time() > strtotime($session->registration_begins) && time() < strtotime($session->registration_ends))
                                  <center> <a class="button -md mt-3 -red-1 align-content-center text-white fw-500 w-1/5"

                                              data-x="center"
                                              data-hoffset="['-25','-25','40','50']"
                                              data-y="middle"
                                              data-voffset="['110','-10','150','150']"
                                              data-width="['auto','auto','auto','auto']"
                                              data-textAlign="['center','center','center','center']"

                                              data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                              data-responsive="on"
                                              data-responsive_offset="on"
                                              style="z-index: 9;" href='{{ route('register') }}'>Enroll!
                                      </a></center>
                              @endif
                          </div>
                      </li>
                      <li data-transition="fade" data-nav-color="light"><img src="{{ asset('banner/banner-real.jpeg') }}" alt="" />
                          <div class="tp-caption w-regular color-red shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['-35','-35','-55','-50']"
                               data-fontsize="['50','50','50','36']"
                               data-lineheight="['60','60','60','46']"
                               data-width="['1100','980','600','450']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9;color: #ff0">
                          </div>
                            <!--
                          <div class="tp-caption w-light shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['35','35','55','50']"
                               data-fontsize="['28','28','28','22']"
                               data-lineheight="['38','38','38','32']"
                               data-width="['1100','980','600','400']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9; background-color: rgba(0%, 0%, 100%, 0.55); height: auto; padding-bottom: 50px; padding-top: 50px; color: #FFF; border-radius: 10px;">
                              <h2 style="color:#FFFF">

                              </h2>
                              <br/>
                              <br/>
                              <center> <a class="button -md mt-5 -red-1 align-content-center text-white fw-500 w-1/3"

                                          data-x="center"
                                          data-hoffset="['-25','-25','40','50']"
                                          data-y="middle"
                                          data-voffset="['110','-10','150','150']"
                                          data-width="['auto','auto','auto','auto']"
                                          data-textAlign="['center','center','center','center']"

                                          data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                          data-responsive="on"
                                          data-responsive_offset="on"
                                          style="z-index: 9;" href='{{ route('candidates') }}'>Successful Candidates
                                  </a></center>
                              @if(  time() > strtotime($session->registration_begins) && time() < strtotime($session->registration_ends))
                                  <center> <a class="button -md mt-3 -red-1 align-content-center text-white fw-500 w-1/5"

                                              data-x="center"
                                              data-hoffset="['-25','-25','40','50']"
                                              data-y="middle"
                                              data-voffset="['110','-10','150','150']"
                                              data-width="['auto','auto','auto','auto']"
                                              data-textAlign="['center','center','center','center']"

                                              data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                              data-responsive="on"
                                              data-responsive_offset="on"
                                              style="z-index: 9;" href='{{ route('register') }}'>Apply Here!
                                      </a></center>
                              @endif
                          </div>
                            -->
                      </li>
                      <li data-transition="fade" data-nav-color="light"><img src="{{ asset('banner/banner-real-2.jpeg') }}" alt="" />
                          <div class="tp-caption w-regular color-red shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['-35','-35','-55','-50']"
                               data-fontsize="['50','50','50','36']"
                               data-lineheight="['60','60','60','46']"
                               data-width="['1100','980','600','450']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9;color: #ff0">
                          </div>
                          <!--
                          <div class="tp-caption w-light shaded_text text-center"
                               data-x="center"
                               data-y="middle"
                               data-voffset="['35','35','55','50']"
                               data-fontsize="['28','28','28','22']"
                               data-lineheight="['38','38','38','32']"
                               data-width="['1100','980','600','400']"
                               data-textAlign="['center','center','center','center']"
                               data-whitespace="['normal','normal','normal','normal']"
                               data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-responsive="on"
                               data-responsive_offset="on"
                               style="z-index: 9; background-color: rgba(0%, 0%, 100%, 0.55); height: auto; padding-bottom: 50px; padding-top: 50px; color: #FFF; border-radius: 10px;">
                              <h2 style="color:#FFFF">

                              </h2>
                              <br/>
                              <br/>
                              <center> <a class="button -md mt-5 -red-1 align-content-center text-white fw-500 w-1/3"

                                          data-x="center"
                                          data-hoffset="['-25','-25','40','50']"
                                          data-y="middle"
                                          data-voffset="['110','-10','150','150']"
                                          data-width="['auto','auto','auto','auto']"
                                          data-textAlign="['center','center','center','center']"

                                          data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                          data-responsive="on"
                                          data-responsive_offset="on"
                                          style="z-index: 9;" href='{{ route('candidates') }}'>Successful Candidates
                                  </a></center>
                              @if(  time() > strtotime($session->registration_begins) && time() < strtotime($session->registration_ends))
                              <center> <a class="button -md mt-3 -red-1 align-content-center text-white fw-500 w-1/5"

                                          data-x="center"
                                          data-hoffset="['-25','-25','40','50']"
                                              data-y="middle"
                                              data-voffset="['110','-10','150','150']"
                                              data-width="['auto','auto','auto','auto']"
                                              data-textAlign="['center','center','center','center']"

                                              data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                              data-responsive="on"
                                              data-responsive_offset="on"
                                              style="z-index: 9;" href='{{ route('register') }}'>Apply Here!
                                      </a></center>
                              @endif
                          </div>
                            -->
                      </li>

                  </ul>
                  <div class="tp-bannertimer tp-bottom"></div>
              </div><!-- /.rev_slider fullscreenbanner rs-nav-light -->
          </div>
      </section>
      <section data-anim-wrap class="masthead">
          <div data-anim-child="slide-up delay-2" class="pl-lg-45 pr-lg-30 pl-20 pr-15">
              <div class="row mt-1 y-gap-50 items-center">
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
                          <h1 data-anim-child="slide-up delay-2" class="masthead__title">
                              Welcome to
                              Directorate of Command Schools Services
                          </h1>
                            -->
                          <h1 data-anim-child="slide-up delay-2" class="masthead__title">

                          </h1>

                          <p data-anim-child="slide-up delay-3" class="mt-5">
                              This is to announce the release of successful candidate for admission into Junior Secondary Schools (JSS1) in Command Secondary Schools for the 2025/2026 Academic Session is out.
                              <a href="{{ route('news') }}">Click here to read more</a>
                          </p>

                          @if(  time() > strtotime($session->registration_begins) && time() < strtotime($session->registration_ends))
                              <div data-anim-child="slide-up delay-4" class="row items-center x-gap-20 y-gap-20 pt-20">
                                  <div class="col-auto">
                                      <a href="{{ route("register") }}" class="button -md -orange-1 text-white">Enroll Now</a>
                                  </div>
                              </div>
                          @endif

                          <div data-anim-child="slide-up delay-5" class="row x-gap-20 y-gap-20 items-center pt-60 lg:pt-30">

                              <div class="col-xl-4 col-auto">
                                  <div class="text-dark-1">
                                      <div class="mr-10">
                                          <img src="{{ asset("img/home-8/hero/icons/1.svg") }}" alt="icon">
                                      </div>
                                      <div class="fw-500 lh-11 mt-10">31<br> BOARDING SCHOOLS</div>
                                  </div>
                              </div>

                              <div class="col-xl-4 col-auto">
                                  <div class="text-dark-1">
                                      <div class="mr-10">
                                          <img src="{{ asset("img/home-8/hero/icons/1.svg") }}" alt="icon">
                                      </div>
                                      <div class="fw-500 lh-11 mt-10">19<br> DAY SCHOOLS</div>
                                  </div>
                              </div>

                              <div class="col-xl-4 col-auto">
                                  <div class="text-dark-1">
                                      <div class="mr-10">
                                          <img src="{{ asset("img/home-8/hero/icons/1.svg") }}" alt="icon">
                                      </div>
                                      <div class="fw-500 lh-11 mt-10">50<br> TOTAL SCHOOLS</div>
                                  </div>
                              </div>

                          </div>
                          <br/>  <br/>  <br/>
                      </div>
                  </div>

                  <div class="col-lg-6">
                      <div data-anim-child="slide-up delay-6" class="masthead__image">
                          <section data-anim-wrap class="mainSlider -type-1 js-mainSlider">
                              <img src="{{ asset('banner/sideimage.jpg') }}" class="img-fluid" />
                          </section>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
@endsection

@section('top_news')

    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">
                Breaking News: SUCCESSFUL CANDIDATES FOR ADMISSION INTO JSS1 IN COMMAND SECONDARY SCHOOLS 2025/2026 ACADEMIC SESSION IS OUT. <a href="{{ route('news') }}">CLICK HERE TO READ MORE.</a>
                <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a>
        </marquee>
    </div>

@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('revslider/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revslider/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revslider/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revslider/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revslider/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revslider/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revslider/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revslider/revolution.extension.kenburn.min.js') }}"></script>
    <script>
        var revapi1 = jQuery('#slider').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: "fullscreen",
                fullScreenOffsetContainer: ".navbar:not(.fixed)",
                spinner: "spinner",
                delay: 2000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                responsiveLevels: [1240, 1024, 778, 480],
                navigation: {
                    arrows: {
                        enable: true,
                        hide_onleave: true
                    },
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    },
                    bullets: {
                        enable: true,
                        hide_onleave: true,
                        hide_onmobile: true,
                        h_align: "center",
                        v_align: "bottom",
                        space: 8,
                        h_offset: 0,
                        v_offset: 20,
                        tmp: ''
                    }
                }
            });
        var api1 = revapi1.on('revolution.slide.onchange', function(e, data) {
            api1.removeClass('rs-nav-light rs-nav-dark').addClass(
                'rs-nav-' + api1.find('li').eq(data.slideIndex - 1).attr('data-nav-color')
            );
        });

    </script>
@endsection
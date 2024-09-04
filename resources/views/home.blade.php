@extends('layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')
  <div class="container-fluid">
      <section data-anim-wrap class="masthead">
          <div class="rev_slider_wrapper fullscreen-container">
              <div id="slider" class="rev_slider fullscreenbanner rs-nav-light" data-version="5.4.1">
                  <ul>

                      <li data-transition="fade" data-nav-color="light"><img src="{{ asset('banner/slide1.jpg') }}" alt="" />
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
                      <li data-transition="fade" data-nav-color="light"><img src="{{ asset('banner/slide2.jpg') }}" alt="" />
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
                      <li data-transition="fade" data-nav-color="light"><img src="{{ asset('banner/slide3.jpg') }}" alt="" />
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
                          <!--
                          <h1 data-anim-child="slide-up delay-2" class="masthead__title">
                              Welcome to
                              Directorate of Command Schools Services
                          </h1>
                          -->
                          <h1 data-anim-child="slide-up delay-2" class="masthead__title">

                          </h1>
                          <p data-anim-child="slide-up delay-3" class="mt-5">

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
                                      <div class="fw-500 lh-11 mt-10">16<br> DAY SCHOOLS</div>
                                  </div>
                              </div>

                              <div class="col-xl-4 col-auto">
                                  <div class="text-dark-1">
                                      <div class="mr-10">
                                          <img src="{{ asset("img/home-8/hero/icons/1.svg") }}" alt="icon">
                                      </div>
                                      <div class="fw-500 lh-11 mt-10">47<br> TOTAL SCHOOLS</div>
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
                delay: 5000,
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
        var revapi2 = jQuery('#slider2').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: 'fullwidth',
                spinner: "spinner",
                delay: 5000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                gridheight:[600, 525, 400, 400],
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
                        h_align: "center",
                        v_align: "bottom",
                        space: 8,
                        h_offset: 0,
                        v_offset: 20,
                        tmp: ''
                    }
                }
            });
        var api2 = revapi2.on('revolution.slide.onchange', function(e, data) {
            api2.removeClass('rs-nav-light rs-nav-dark').addClass(
                'rs-nav-' + api2.find('li').eq(data.slideIndex - 1).attr('data-nav-color')
            );
        });
        var revapi3 = jQuery('#slider3').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: "auto",
                spinner: "spinner",
                delay: 5000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                gridheight:[600, 525, 400, 400],
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
                        h_align: "center",
                        v_align: "bottom",
                        space: 8,
                        h_offset: 0,
                        v_offset: 20,
                        tmp: ''
                    }
                }
            });
        var api3 = revapi3.on('revolution.slide.onchange', function(e, data) {
            api3.removeClass('rs-nav-light rs-nav-dark').addClass(
                'rs-nav-' + api3.find('li').eq(data.slideIndex - 1).attr('data-nav-color')
            );
        });
        var revapi4 = jQuery('#slider4').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: 'fullwidth',
                spinner: "spinner",
                delay: 5000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                gridheight:[600, 525, 400, 400],
                responsiveLevels: [1240, 1024, 778, 480],
                navigation: {
                    arrows: {
                        enable: false
                    },
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    },
                    bullets: {
                        enable: false
                    }
                }
            });
        var revapi5 = jQuery('#slider5').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: "fullscreen",
                fullScreenOffsetContainer: ".navbar:not(.fixed)",
                spinner: "spinner",
                delay: 5000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                responsiveLevels: [1240, 1024, 778, 480],
                navigation: {
                    arrows: {
                        enable: false
                    },
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    },
                    bullets: {
                        enable: false
                    }
                }
            });
        var api5 = revapi5.on('revolution.slide.onchange', function(e, data) {
            api5.removeClass('rs-nav-light rs-nav-dark').addClass(
                'rs-nav-' + api5.find('li').eq(data.slideIndex - 1).attr('data-nav-color')
            );
        });
        var revapi6 = jQuery('#slider6').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: "auto",
                spinner: "spinner",
                delay: 5000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                gridheight:[600, 525, 400, 400],
                responsiveLevels: [1240, 1024, 778, 480],
                navigation: {
                    arrows: {
                        enable: false
                    },
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    },
                    bullets: {
                        enable: false
                    }
                }
            });
        var api6 = revapi6.on('revolution.slide.onchange', function(e, data) {
            api6.removeClass('rs-nav-light rs-nav-dark').addClass(
                'rs-nav-' + api6.find('li').eq(data.slideIndex - 1).attr('data-nav-color')
            );
        });
        var revapi7 = jQuery('#slider7').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: "fullscreen",
                spinner: "spinner",
                delay: 5000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                responsiveLevels: [1240, 1024, 778, 480],
                navigation: {
                    arrows: {
                        enable: false
                    },
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    },
                    bullets: {
                        enable: false
                    }
                }
            });
        var api7 = revapi7.on('revolution.slide.onchange', function(e, data) {
            api7.removeClass('rs-nav-light rs-nav-dark').addClass(
                'rs-nav-' + api7.find('li').eq(data.slideIndex - 1).attr('data-nav-color')
            );
        });
        var revapi8 = jQuery('#slider8').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: "fullscreen",
                spinner: "spinner",
                delay: 5000,
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
        var api8 = revapi8.on('revolution.slide.onchange', function(e, data) {
            api8.removeClass('rs-nav-light rs-nav-dark').addClass(
                'rs-nav-' + api1.find('li').eq(data.slideIndex - 1).attr('data-nav-color')
            );
        });
        var revapi9 = jQuery('#slider9').show().revolution(
            {
                sliderType: "standard",
                sliderLayout: 'fullwidth',
                spinner: "spinner",
                delay: 5000,
                shadow: 0,
                gridwidth:[1170, 1024, 778, 480],
                gridheight:[700, 525, 400, 400],
                responsiveLevels: [1240, 1024, 778, 480],
                navigation: {
                    arrows: {
                        enable: false
                    },
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
                    },
                    bullets: {
                        enable: false
                    }
                }
            });
    </script>
@endsection
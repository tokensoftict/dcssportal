<header data-anim="fade" data-add-bg="bg-danger" class=" header -type-5 js-header">


    <div class="d-flex items-center bg-red-1 text-white py-10 border-bottom-light">
        <div class="header__container">
            <div class="row y-gap-5 justify-between items-center text-white">
                <div class="col-auto">
                    <div class="d-flex x-gap-40 y-gap-10 items-center ">
                        <div class="d-flex items-center text-white md:d-none">
                            <div class="icon-phone mr-10"></div>
                            <div class="text-13 lh-1">For inquires and support please call
                                or send email
                            </div>
                        </div>
                        <div class="d-flex items-center text-white">
                            <div class="icon-megaphone mr-10"></div>
                            <div class="text-13 lh-1">08113856079</div>
                        </div>

                        <div class="d-flex items-center text-white">
                            <div class="icon-email mr-10"></div>
                            <div class="text-13 lh-1">support@dcss.sch.ng</div>
                        </div>
                        <div class="d-flex items-center text-white">
                            <div class="icon-email mr-10"></div>
                            <div class="text-13 lh-1">commandentrance@gmail.com</div>
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="d-flex x-gap-30 y-gap-10">
                        <div>
                            <div class="d-flex x-gap-20 items-center text-white">
                                <a href="#"><i class="icon-facebook text-11"></i></a>
                                <a href="#"><i class="icon-twitter text-11"></i></a>
                                <a href="#"><i class="icon-instagram text-11"></i></a>
                                <a href="#"><i class="icon-linkedin text-11"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield("top_news")

    <div class="header__container py-10 bg-light-12">
        <div class="row justify-between items-center">

            <div class="col-sm-auto col-lg-auto col-9">
                <div class="header-left d-flex items-center">

                    <div class="header__logo ">
                        <a data-barba href="{{ asset("") }}">
                            <img src="{{ asset("img/logo.png") }}" style="width: 80%"  alt="logo">
                        </a>
                    </div>


                    <div class="header-menu js-mobile-menu-toggle ">
                        <div class="header-menu__content">
                            <div class="mobile-bg js-mobile-bg"></div>

                            <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                                <a href="{{ route("login") }}" class="text-dark-1">Log in</a>
                                <a href="{{ route("register") }}" class="text-dark-1 ml-30">Enroll Now</a>
                            </div>

                            @include("layout.header-menu")

                            <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                <div class="mobile-footer__number">
                                    <div class="text-17 fw-500 text-dark-1">Call us</div>
                                    <div class="text-17 fw-500 text-purple-1">08113856079</div>
                                </div>


                                <div class="mobile-socials mt-10">

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-instagram"></i>
                                    </a>

                                    <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                            <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                                <div class="icon-close text-dark-1 text-16"></div>
                            </div>
                        </div>

                        <div class="header-menu-bg"></div>
                    </div>

                </div>
            </div>


            <div class="col-sm-auto col-lg-auto col-3">
                <div class="header-right d-flex items-center">
                    <div class="header-right__icons text-white d-flex items-center">

                        <div class="d-none xl:d-block ml-20">
                            <button class="text-dark-1 items-center" data-el-toggle=".js-mobile-menu-toggle">
                                <i class="text-11 icon icon-mobile-menu"></i>
                            </button>
                        </div>

                    </div>

                    <div class="header-right__buttons d-flex items-center ml-30 xl:ml-20 lg:d-none">
                        <a href="{{ route("login") }}" class="button -underline text-dark-1">Log in</a>
                        <a href="{{ route("register") }}" class="button px-25 h-50 -dark-1 text-white ml-20">Enroll Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

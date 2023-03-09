
<header class="header -base-sidebar border-bottom-light bg-white js-header">
    <div class="header__container py-20 px-10">
        <div class="row justify-between items-center">
            <div class="col-auto">
                <div class="d-flex items-center">

                    <div class="header__logo">
                        <a data-barba href="{{ asset('') }}">
                            <img src="{{ asset("img/logo.png") }}" style="width: 80%"  alt="logo">

                        </a>
                    </div>
                    <div class="header__explore text-dark-1">
                        <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                            <i class="icon -dark-text-white icon-explore"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="d-flex items-center sm:d-none">
                        <div class="d-none">
                            <button class="js-darkmode-toggle text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                                <i class="text-light-1 text-24 icon icon-night"></i>
                            </button>
                        </div>

                    </div>

                    <div class="relative d-flex items-center ml-10">
                        <a href="#" data-el-toggle=".js-profile-toggle">
                            <img class="size-50" src="{{ asset('img/logo-3.png') }}" alt="image">
                        </a>

                        <div class="toggle-element js-profile-toggle">
                            <div class="toggle-bottom -profile bg-white shadow-4 border-light rounded-8 mt-10">
                                <div class="px-30 py-30">

                                    <div class="sidebar -dashboard">
                                        @if(auth()->user()->isAdmin() || auth()->user()->isDcssAdmin())
                                            <div class="sidebar__item ">
                                                <a href="{{ route('account.profile',auth()->id()) }}" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                    <i class="text-20 icon-person-3 mr-15"></i>
                                                    My Profile
                                                </a>
                                            </div>
                                         @else
                                        <div class="sidebar__item ">
                                            <a href="{{ route('account.profile',(isset($application->user_id) ? $application->user_id : $user->id)) }}" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                <i class="text-20 icon-person-3 mr-15"></i>
                                                My Profile
                                            </a>
                                        </div>
                                       @endif
                                            <div class="sidebar__item ">
                                            <a href="{{ route('account.logout') }}" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                <i class="text-20 icon-power mr-15"></i>
                                                Logout
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

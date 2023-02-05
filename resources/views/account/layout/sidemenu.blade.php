@php
    $application = \App\Models\Application::where("user_id",auth()->user()->id)->first();
@endphp
<div class="sidebar -base-sidebar">
    <div class="sidebar__inner">
        <div>
            <div class="text-16 lh-1 fw-500 text-dark-1 mb-30">My Menu</div>
            <div>

                <div class="sidebar__item">
                    <a href="{{ route('account.dashboard') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-discovery mr-15"></i>
                        My Application
                    </a>
                </div>

                <div class="sidebar__item">
                    <a href="{{ route('account.make_payment',$application->id) }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-save-money mr-15"></i>
                        Make Payment
                    </a>
                </div>

                <div class="sidebar__item">
                    <a  href="{{ route('account.print_photocard',$application->id) }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-star mr-15"></i>
                       Print Photo Card
                    </a>
                </div>
<!--
                <div class="sidebar__item ">
                    <a href="{{ route('account.profile') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-person-3 mr-15"></i>
                        My Profile
                    </a>
                </div>
-->
                <div class="sidebar__item ">
                    <a href="{{ route("account.logout") }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                        <i class="text-20 icon-access mr-15"></i>
                        Log out
                    </a>
                </div>


            </div>
        </div>
        @if(auth()->user()->is_admin === 1)
            <div class="mt-60">
                <div class="text-16 lh-1 fw-500 text-dark-1 mb-30">Administrator</div>
                <div class="">

                    <div class="">
                        <a href="#" class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            System Settings
                        </a>
                    </div>

                    <div class="">
                        <a href="#" class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Price Settings
                        </a>
                    </div>

                    <div class="">
                        <a href="#" class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            News
                        </a>
                    </div>




                </div>
            </div>
        @endif
    </div>
</div>

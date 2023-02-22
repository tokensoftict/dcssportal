@if(!auth()->user()->isAdmin())
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

        </div>
    </div>
@else
    <div class="sidebar -base-sidebar">
        <div class="sidebar__inner">
            <div>
                <div class="text-16 lh-1 fw-500 text-dark-1 mb-30">My Menu</div>
                <div>
                    <div class="sidebar__item">
                        <a href="{{ route('administrator.index') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-discovery mr-15"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="sidebar__item">
                        <a  href="{{ route('administrator.myapplication') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-list-2 mr-15"></i>
                            My Application(s)
                        </a>
                    </div>
                    <div class="sidebar__item">
                        <a  href="{{ route('administrator.new-application') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-document mr-15"></i>
                           New Application
                        </a>
                    </div>
                    <div class="sidebar__item">
                        <a  href="{{ route('administrator.reports') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-bar-chart mr-15"></i>
                            Reports
                        </a>
                    </div>
                    <!--
                    <div class="sidebar__item">
                        <a  href="{{ route('administrator.settings',1) }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-setting mr-15"></i>
                            System Settings
                        </a>
                    </div>

                    -->
                </div>
            </div>
        </div>
    </div>



@endif



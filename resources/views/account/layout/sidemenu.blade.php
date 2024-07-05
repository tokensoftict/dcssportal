@if(!(auth()->user()->isAdmin() ||  auth()->user()->isDcssAdmin() ||  auth()->user()->isUpperlinkAdmin() ))
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
                    <div class="sidebar__item">
                        <a  href="{{ route('account.transactions',$application->id) }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-list-2 mr-15"></i>
                            Transactions
                        </a>
                    </div>

                    <div class="sidebar__item ">
                        <a href="{{ route('account.profile',$application->user_id) }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-person-3 mr-15"></i>
                            My Profile
                        </a>
                    </div>

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
                    @if(auth()->user()->isAdmin() ||  auth()->user()->isDcssAdmin() || auth()->user()->isUpperlinkAdmin())
                        <div class="sidebar__item">
                            <a href="{{ route('administrator.index') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-discovery mr-15"></i>
                                Dashboard
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.myapplication') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-list-2 mr-15"></i>
                                My Application(s)
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.new-application') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-access mr-15"></i>
                                New Application
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin() || auth()->user()->isUpperlinkAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.view_application') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-explore mr-15"></i>
                                Query Application
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin() ||  auth()->user()->isDcssAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.reports') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-bar-chart mr-15"></i>
                                Reports
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin() ||  auth()->user()->isDcssAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.reports_by_center') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-bar-chart mr-15"></i>
                                Reports By Center
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin() ||  auth()->user()->isDcssAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.reports_by_school') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-bar-chart mr-15"></i>
                                Reports By School
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin() ||  auth()->user()->isDcssAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.reports_by_status') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-bar-chart-2 mr-15"></i>
                                Reports By Payment
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.interview_upload') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-cloud mr-15"></i>
                                Interview Upload
                            </a>
                        </div>
                    @endif
                        @if(auth()->user()->isAdmin())
                            <div class="sidebar__item">
                                <a  href="{{ route('administrator.upload_candidate') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                    <i class="text-20 icon-cloud mr-15"></i>
                                    Upload Candidate
                                </a>
                            </div>
                        @endif
                    @if(auth()->user()->isAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.new_user') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-person-3 mr-15"></i>
                                New Administrator
                            </a>
                        </div>
                    @endif
                    @if(auth()->user()->isAdmin())
                        <div class="sidebar__item">
                            <a  href="{{ route('administrator.list_user') }}" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                                <i class="text-20 icon-person-2 mr-15"></i>
                                List Administrator
                            </a>
                        </div>
                    @endif

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



@extends('account.layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Dashboard</h1>
            <div class="mt-10">System Overview</div>
        </div>
    </div>


    <div class="row y-gap-30">

        <div class="col-xl-3 col-md-6">
            <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                <div>
                    <div class="lh-1 fw-500">Total</div>
                    <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{ \App\Models\Application::count() }}</div>
                    <div class="lh-1 mt-25"><span class="text-purple-1"></span> Applicants</div>
                </div>

                <i class="text-40 icon-coupon text-purple-1"></i>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                <div>
                    <div class="lh-1 fw-500">Completed</div>
                    <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{ \App\Models\Application::whereNotNull('exam_number')->count() }}</div>
                    <div class="lh-1 mt-25"><span class="text-purple-1"></span>Completed</div>
                </div>

                <i class="text-40 icon-play-button text-purple-1"></i>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                <div>
                    <div class="lh-1 fw-500">Pending</div>
                    <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{ \App\Models\Application::whereNull('exam_number')->count() }}</div>
                    <div class="lh-1 mt-25"><span class="text-purple-1"></span> Pending</div>
                </div>

                <i class="text-40 icon-graduate-cap text-purple-1"></i>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                <div>
                    <div class="lh-1 fw-500">Centers</div>
                    <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{ \App\Models\Center::count() }}</div>
                    <div class="lh-1 mt-25"><span class="text-purple-1"></span> Centers</div>
                </div>

                <i class="text-40 icon-online-learning text-purple-1"></i>
            </div>
        </div>



        <div class="col-xl-3 col-md-6">
            <div class="d-flex justify-between items-center py-35 px-30 rounded-16 bg-white -dark-bg-dark-1 shadow-4">
                <div>
                    <div class="lh-1 fw-500">Interview Count</div>
                    <div class="text-24 lh-1 fw-700 text-dark-1 mt-20">{{ \App\Models\CandidateQualifiedInterview::count() }}</div>
                    <div class="lh-1 mt-25"><span class="text-purple-1"></span> Centers</div>
                </div>

                <i class="text-40 icon-person-3 text-purple-1"></i>
            </div>
        </div>


    </div>


@endsection

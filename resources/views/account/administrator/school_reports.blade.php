@extends('account.layout.main')
@section('title',"School Statistics Report - DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">School Application Statistics</h1>
            <div class="mt-10">Application summary across all schools</div>
        </div>
    </div>

    @livewire('school-stats-report')

@endsection

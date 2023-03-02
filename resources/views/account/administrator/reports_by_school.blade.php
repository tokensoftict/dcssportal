@extends('account.layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Application Reports By School</h1>
            <div class="mt-10">Generate Applicants Excel Reports By School</div>
        </div>
    </div>

    <livewire:applicants-report :filter="$filter"/>
@endsection

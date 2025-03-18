@extends('account.layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Payment Reports</h1>
            <div class="mt-10">Generate Applicants Payment Reports</div>
        </div>
    </div>

    <livewire:applicants-payment-report/>
@endsection

@extends('account.layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Update Application Details</h1>
            <div class="mt-10">Update Application Details</div>
        </div>
    </div>

    <livewire:enrollment :application="$application"/>

@endsection

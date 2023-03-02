@extends('account.layout.main')
@section('title',"Account / Login Details")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Account / Login Details</h1>
            <div class="mt-10">Edit / Update Account Details</div>
        </div>
    </div>

    <livewire:edit-account-information :user="$user"/>
@endsection

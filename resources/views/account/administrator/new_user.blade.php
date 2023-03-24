@extends('account.layout.main')
@section('title',"Account / Login Details")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Administrator Details</h1>
            <div class="mt-10">Administrator Account</div>
        </div>
    </div>

    <div class="row y-gap-30">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-4">
                <livewire:administrator-account-manager :user="$user"/>
            </div>
        </div>
    </div>

@endsection

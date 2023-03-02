@extends('account.layout.main')
@section('title',"Transaction List")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Transaction(s)</h1>
            <div class="mt-10">Re-query Transaction(s)</div>
        </div>
    </div>


    <livewire:requery-transactions :application="$application"/>

@endsection

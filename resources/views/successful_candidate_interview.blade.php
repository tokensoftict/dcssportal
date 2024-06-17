@extends('layout.main')
@section('title',"LISTS SUCCESSFUL CANDIDATES FOR INTERVIEW")

@section('content')

    <section data-anim-wrap class="masthead -type-5 mt-50">

        <div class="pl-45 pr-30">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-24 text-red-1">LIST OF SUCCESSFUL CANDIDATES FOR INTERVIEW - 2024/2025 SESSION </h2>
                        <div class="row mt-4">
                            <div class="col-lg-12 col-12">
                                <br/>
                                <h6 class="text-center text-17 text-blue-1 text-center">CHECK INTERVIEW STATUS</h6>
                                    <livewire:candidate-interview-status/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br/> <br/> <br/> <br/> <br/>
@endsection
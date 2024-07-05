@extends('account.layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Upload Candidate</h1>
            <div class="mt-10">Upload Candidate and Generate Exam Number</div>
        </div>
    </div>

    <div class="row y-gap-30">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-4">
                <livewire:upload-candidate-and-generate-exam-numbers />
            </div>
        </div>
    </div>
@endsection

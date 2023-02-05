@extends('account.layout.main')
@section('title',"Pay Application Fee")

@section('content')

    <div class="row pb-50 mb-10 ">
        <div class="col-auto">
            <h1 class="text-30 lh-12 fw-700">Photo Card</h1>
            <div class="mt-10">Print Photo Card</div>
        </div>
    </div>

    @if($application->exam_number === NULL)



        <div class="row y-gap-30">
            <div class="col-sm-7 col-12 offset-sm-2">
                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                        <h2 class="text-17 lh-1 fw-500">Print Photo Card</h2>
                    </div>

                    <div class="py-30 px-30 text-center">
                        <h3 align="center" class="text-red-1">You can only print your Photocard if you've made payment.</h3>
                    </div>
                </div>
            </div>
        </div>

    @else

        <div class="row y-gap-30">
            <div class="col-sm-7 col-12 offset-sm-2">
                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                        <h2 class="text-17 lh-1 fw-500">Print Payment Receipt</h2>
                    </div>

                    <div class="py-30 px-30 text-center">

                        <a  href="{{ route('account.download_photocard',$application->id) }}" target="_new" class="button -icon -red-1 text-white">
                            Print Photo card
                            <i class="icon-check text-13 ml-10"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection

@extends('account.layout.main')
@section('title',"Pay Application Fee")

@section('content')

    @if($application->exam_number === NULL)

        <div class="row pb-50 mb-10 ">
            <div class="col-auto">
                <h1 class="text-30 lh-12 fw-700">Make Payment</h1>
                <div class="mt-10">Application Fee</div>
            </div>
        </div>

        <livewire:make-payment :application="$application"/>

    @else

        <div class="row pb-50 mb-10 ">
            <div class="col-auto">
                <h1 class="text-30 lh-12 fw-700">Payment</h1>
                <div class="mt-10">Payment Receipt</div>
            </div>
        </div>

        <div class="row y-gap-30">
            <div class="col-sm-7 col-12 offset-sm-2">
                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                    <div class="d-flex items-center py-20 px-30 border-bottom-light">
                        <h2 class="text-17 lh-1 fw-500">Print Payment Receipt</h2>
                    </div>

                    <div class="py-30 px-30 text-center">

                        <a  href="{{ route('account.download_payment_receipt',$application->id) }}" target="_new" class="button -icon -purple-1 text-white">
                           Print Payment Receipt
                            <i class="icon-check text-13 ml-10"></i>
                        </a>



                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection

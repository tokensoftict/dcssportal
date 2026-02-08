@extends('layout.main')
@section('title',"LOGIN")

@section('content')


    <section class="form-page form-page2 mt-60" style="height: auto">

        <div class="form-page__content lg:py-50">
            <div class="container">
                <div class="row">
                    <div class="offset-sm-5 col-xl-5 col-lg-8">

                        <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                            <h1 align="center" class="text-2xl font-bold mb-4">Email Verification</h1>

                            <p class="mb-4" align="center">
                                Your email address has been verified successfully!
                            </p>

                            <center><a href="{{ route("login") }}">Click here to login</a></center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



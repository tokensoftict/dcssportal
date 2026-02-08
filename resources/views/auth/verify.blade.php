@extends('layout.main')
@section('title',"LOGIN")

@section('content')


    <section class="form-page form-page2 mt-60" style="height: auto">

        <div class="form-page__content lg:py-50">
            <div class="container">
                <div class="row">
                    <div class="offset-sm-5 col-xl-5 col-lg-8">

                        <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                            <h1 class="text-2xl font-bold mb-4">Verify Your Email Address</h1>

                            <p class="mb-4">
                                Hi <b>{{ auth()->user()->firstname }},</b> <br/>
                                Thanks for signing up! Before you can proceed, please check <b>{{ auth()->user()->email }}</b> for a verification link.
                            </p>

                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 text-green-600">
                                    <b>A new verification link has been sent to <b>{{ auth()->user()->email }}</b>.</b>
                                </div>
                            @endif

                            <p class="mb-4">
                                Didn't receive the email?
                            </p>

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" name="submit" id="submit" class="button -md -red-1 text-white fw-500 w-1/1">
                                    Resend Verification Email
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



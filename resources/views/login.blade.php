@extends('layout.main')
@section('title',"LOGIN")

@section('content')


    <section class="form-page form-page2 mt-60" style="height: auto">

        <div class="form-page__content lg:py-50">
            <div class="container">
                <div class="row">
                    <div class="offset-sm-5 col-xl-6 col-lg-8">
                        <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                            <h3 class="text-30 lh-13">Login</h3>
                            <p class="mt-10">Don't have an account yet? <a href="{{ asset("register") }}" class="text-purple-1">Sign up for free</a></p>
                            @if (session('error'))
                                <div class="alert alert-error text-red-3" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form method="post" class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('loginprocess') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                                    <input type="email" required name="email" placeholder="Email Address">
                                </div>
                                <div class="col-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password</label>
                                    <input type="password" required name="password" placeholder="Password">
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" id="submit" class="button -md -red-1 text-white fw-500 w-1/1">
                                        Login
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold">THIS IS TO INFORM THE GENERAL PUBLIC THAT ONLINE APPLICATIONS FOR ADMISSION INTO COMMAND SECONDARY SCHOOLS FOR 2023/2024 ACADEMIC SESSION WILL COMMENCE ON FRIDAY 24 FEBRUARY ,2023 AND END ON SATURDAY  10 JUNE 2023 <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a></marquee>
    </div>
@endsection

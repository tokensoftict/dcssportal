@extends('layout.main')
@section('title',"ENROLL NOW")

@section('content')
    <section class="form-page  mt-60">

        <div class="form-page__content lg:py-50 mt-30 offset-lg-1 offset-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-2 rounded-16">
                            <h3 class="text-30 lh-13 mt-20">Enroll Now</h3>
                            <p class="mt-10">Already have an account? <a href="{{ asset("login") }}" class="text-purple-1">Log in</a></p>
                            @if(  time() > strtotime($session->registration_begins) && time() < strtotime($session->registration_ends))
                            <livewire:enrollment/>
                            @else
                                <div style="height: 50vh">
                                    <br/>  <br/>  <br/>  <br/>
                                    <h2 align="center" class="text-red-1"> Applications has closed!</h2>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

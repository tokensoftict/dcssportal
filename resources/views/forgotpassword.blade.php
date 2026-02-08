@extends('layout.main')
@section('title',"PASSWORD RESET")

@section('content')


    <section class="form-page form-page2 mt-60" style="height: auto">

        <div class="form-page__content lg:py-50">
            <div class="container">
                <div class="row">
                    <div class="offset-sm-5 col-xl-5 col-lg-8">
                        <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                            <h3 class="text-30 lh-13">Password Reset</h3>
                            @if (session('status'))
                                <div class="alert alert-error text-red-3" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="post" class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('password.email') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                                    <input type="email" required name="email" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="text-red-3">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="col-12">
                                    <button type="submit" name="submit" id="submit" class="button -md -red-1 text-white fw-500 w-1/1">
                                        Submit
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



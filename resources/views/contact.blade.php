@extends('layout.main')
@section('title',"OUR CONTACT")

@section('content')

    <section data-anim-wrap class="masthead -type-5 mt-50">
        <div class="pl-45 pr-30" style="height: 60vh">
            <div class="row y-gap-50">
                <div class="col-12 col-sm-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white text-center">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" placeholder="Your message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <br/>
                    <h2 class="text-20">Address</h2>
                    <p> Directorate of Command Schools Services<br/>
                        Nigerian Army Cantonment Ikeja Lagos</p>
                    <br/> <br/>
                    <h2 class="text-20">Email Address</h2>
                    <p> support@dcss.sch.ng</p>
                    <br/> <br/>
                    <h2 class="text-20">Phone Number</h2>
                    <p> 8113856079</p>
                </div>

            </div>
        </div>
    </section>
@endsection


@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <!--
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">
                COMMAND SECONDARY SCHOOLS COMMON ENTRANCE EXAMINATION RESULT 2025/2026 IS OUT <a href="{{ route('news') }}">CLICK HERE TO READ MORE.</a>
                <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a>
        </marquee>
        -->
    </div>
@endsection

@extends('layout.main')
@section('title',"RECENT NEWS")

@section('content')
    <section data-anim-wrap class="masthead -type-5">

        <div class="pl-45 pr-30">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-lg-7 mt-2 offset-lg-3 col-12">
                        <br/>
                        <h2 class="text-center text-24 text-red-1">LIST OF SUCCESSFUL CANDIDATES FOR ADMISSION INTO JSS1 IN COMMAND SECONDARY SCHOOLS 2025/2026 ACADEMIC SESSION IS OUT</h2><br/>
                        <p>
                            This is to inform parents that the results of the selection interview for admission into Command Secondary Schools Junior Secondary School (JSS1) for the 2025/2026 academic session have been released. Successful candidates are requested to check their names at their schools of choice and Nigerian Army Divisional Education Services’ offices at the Division’s Headquarters.
                        </p>
                        <p>In view of the above, successful candidates are requested to report to their schools of choice with the following documents to collect their admission letters:</p>
                        <div class="mt-2 col-12">
                            <b> a. Military Personnel’s Children</b><br/>

                            (1) Entrance examination photo card.<br/>

                            (2) Photocopy of parent’s Military ID card.<br/>

                            (3) Letter of identification from parent’s unit.<br/>

                            (4) Birth Certificate or sworn declaration of age.<br/>

                            (5) Part 2/3 Orders publishing the candidate’s birth.<br/>

                            (6) Primary School Testimonial/First School Leaving Certificate<br/>

                            <br/>


                            <b> b. Civilians’ Children</b><br/>

                            (1) Entrance examination photo card.<br/>

                            (2) Birth Certificate or sworn declaration of age.<br/>

                            (3) Primary School Testimonial/First School Leaving Certificate<br/>

                        </div>
                        <br/>
                        <p>Furthermore, other requirements will be made available to parents during the collection of admission letters. Admission letters must be collected on or before September 30, 2025. Admission letters not collected by the deadline will be forfeited and replaced with those of candidates on the waiting list.</p>
                        <a href="{{ route('candidates') }}">Click here for the list of successful candidates</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">
                Breaking News: SUCCESSFUL CANDIDATES FOR ADMISSION INTO JSS1 IN COMMAND SECONDARY SCHOOLS 2025/2026 ACADEMIC SESSION IS OUT. <a href="{{ route('news') }}">CLICK HERE TO READ MORE.</a>
                <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a>
        </marquee>
    </div>
@endsection

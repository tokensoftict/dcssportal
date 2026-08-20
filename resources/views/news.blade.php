@extends('layout.main')
@section('title',"RECENT NEWS")

@section('content')
    <section data-anim-wrap class="masthead -type-5" >

        <div class="pl-45 pr-30">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-lg-9 mt-50 offset-lg-2 col-12">
                        <h3 align="center">JSS1 ADMISSION SELECTION INTERVIEW RESULTS — 2026/2027 ACADEMIC SESSION</h3>
                        <br/>
                        <p>This is to inform you that the result of the Selection Interview for admission into Command Secondary
                            Schools&#39; Junior Secondary School (JSS1), 2026/2027 Academic Session, has been released.
                            Successful candidates are requested to check their names at their schools of choice and at NA Divisional
                            Education Services&#39; offices at Divisions&#39; Headquarters. Emails have also been sent to all successful candidates
                            via the addresses provided on their application forms.
                            Candidates may also check the list on the Directorate of Command Schools Services website:
                            <a href="www.dcss.sch.ng">www.dcss.sch.ng</a> </p>

                        <h4 class="mt-4" align="center">DOCUMENTS REQUIRED FOR ADMISSION LETTER COLLECTION</h4><br/>
                        <div class="mt-3 col-12">
                            <h5>MILITARY PERSONNEL&#39;S CHILDREN</h5><br/>

                            (1) Entrance examination photo card.<br/>

                            (2) Photocopy of parent’s Military ID card.<br/>

                            (3) Letter of identification from parent’s unit.<br/>

                            (4) Birth Certificate or sworn declaration of age.<br/>

                            (5) Part 2/3 Orders publishing the candidate’s birth.<br/>

                            (6) Primary School Testimonial/First School Leaving Certificate<br/>

                            <br/>


                            <h5>CIVILIANS’ CHILDREN</h5><br/>

                            (1) Entrance examination photo card.<br/>

                            (2) Birth Certificate or sworn declaration of age.<br/>

                            (3) Primary School Testimonial/First School Leaving Certificate<br/>

                        </div>
                        <br/>
                        <p style="font-weight: bold">Additional requirements will be communicated to parents during the collection of admission letters.</p>

                        <div style="background-color: #fff3f3; border: 2px solid #dc3545; border-left: 8px solid #dc3545; padding: 18px 20px; margin: 20px 0; border-radius: 6px; color: #721c24; font-size: 16px; line-height: 1.6;">

                            <div style="font-size: 20px; font-weight: bold; color: #dc3545; margin-bottom: 8px;">
                                ⚠️ IMPORTANT DEADLINE
                            </div>

                            <strong>
                                Collection of admission letters and payment of school fees must be completed on or before
                                <span style="background-color: #dc3545; color: #ffffff; padding: 4px 8px; border-radius: 4px;">
            Friday, 4 September 2026
        </span>
                            </strong>

                            <div style="margin-top: 10px;">
                                Admission letters not collected by this date will be
                                <strong style="color: #dc3545;">FORFEITED</strong> and offered to candidates on the
                                <strong>waiting list.</strong>
                            </div>

                        </div>
                    </div>
                    {{--                    <div class="col-lg-7 mt-2 offset-lg-3 col-12">--}}
                    {{--                        <br/>--}}
                    {{--                        <h2 class="text-center text-24 text-red-1">LIST OF SUCCESSFUL CANDIDATES FOR ADMISSION INTO JSS1 IN COMMAND SECONDARY SCHOOLS 2025/2026 ACADEMIC SESSION IS OUT</h2><br/>--}}
                    {{--                        <p>--}}
                    {{--                            This is to inform parents that the results of the selection interview for admission into Command Secondary Schools Junior Secondary School (JSS1) for the 2025/2026 academic session have been released. Successful candidates are requested to check their names at their schools of choice and Nigerian Army Divisional Education Services’ offices at the Division’s Headquarters.--}}
                    {{--                        </p>--}}
                    {{--                        <p>In view of the above, successful candidates are requested to report to their schools of choice with the following documents to collect their admission letters:</p>--}}
                    {{--                        <div class="mt-2 col-12">--}}
                    {{--                            <b> a. Military Personnel’s Children</b><br/>--}}

                    {{--                            (1) Entrance examination photo card.<br/>--}}

                    {{--                            (2) Photocopy of parent’s Military ID card.<br/>--}}

                    {{--                            (3) Letter of identification from parent’s unit.<br/>--}}

                    {{--                            (4) Birth Certificate or sworn declaration of age.<br/>--}}

                    {{--                            (5) Part 2/3 Orders publishing the candidate’s birth.<br/>--}}

                    {{--                            (6) Primary School Testimonial/First School Leaving Certificate<br/>--}}

                    {{--                            <br/>--}}


                    {{--                            <b> b. Civilians’ Children</b><br/>--}}

                    {{--                            (1) Entrance examination photo card.<br/>--}}

                    {{--                            (2) Birth Certificate or sworn declaration of age.<br/>--}}

                    {{--                            (3) Primary School Testimonial/First School Leaving Certificate<br/>--}}

                    {{--                        </div>--}}
                    {{--                        <br/>--}}
                    {{--                        <p>Furthermore, other requirements will be made available to parents during the collection of admission letters. Admission letters must be collected on or before September 30, 2025. Admission letters not collected by the deadline will be forfeited and replaced with those of candidates on the waiting list.</p>--}}
                    {{--                        <a href="{{ route('candidates') }}">Click here for the list of successful candidates</a>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection


@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">
                ADMISSION LIST FOR JSS1 INTAKE INTO COMMAND SECONDARY SCHOOLS, 2026/2027 ACADEMIC SESSION, IS NOW OUT
                <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a>
        </marquee>
    </div>
@endsection

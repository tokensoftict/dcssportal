@extends('layout.main')
@section('title',"RECENT NEWS")

@section('content')

    <!--
 <section data-anim-wrap class="masthead -type-5 mt-50">
 <div class="masthead__bg"></div>
        <div class="pl-45 pr-30" style="height: 80vh">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-24 text-red-1">THIS IS TO INFORM THE GENERAL PUBLIC THAT ONLINE APPLICATIONS FOR ADMISSION INTO COMMAND SECONDARY SCHOOLS FOR 2023/2024 ACADEMIC SESSION WILL COMMENCE ON FRIDAY 24 FEBRUARY ,2023 AND END ON SATURDAY  10 JUNE 2023</h2>
                        <h4 class="text-center">Interested candidates are to purchase the form at Two Thousand Naira. (2000)</h4>
                        <br/>
                        <br/>
                        <p class="text-17 text-center">Entrance Examination will take place on Saturday 17 June 2023 by 8am in all designated examination centres nationwide.
                            For Inquiries and support please call 08113856079 or send an email to support@dcss.sch.ng or commandentrance@gmail.com.</p>
                    </div>

                    <div class="col-12 text-center text-17">
                        <br/>
                        <br/>
                        <h5>Procedure for payment</h5>
                       <p> 1. Visit dcss.sch.ng</p>
                        <p> 2. Click On <b>“Enroll Now”</b> Button</p>
                        <p> 3. Complete and submit the application form.</p>
                        <p> 4. Make Payment</p>
                        <p> 5. Download / Print out the photocard which will be presented at the exam center.</p>
                        Thank you
                    </div>
                </div>

            </div>
        </div>
          </section>
        -->

    <section data-anim-wrap class="masthead -type-5 mt-50">

        <div class="pl-45 pr-30">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-lg-7  offset-lg-3 col-12">
                        <h2 class="text-center text-24 text-red-1"></h2>
                        <p>
                            Please be informed that the result of the Command Secondary Schools Selection Interview for admission of candidates into JSS 1 2023/2024 Academic Session is out. Successful candidates are requested to check their names at the schools of choice and NA Divisional Education Services nationwide.
                        </p>
                        <p>    In view of the above, successful candidates are requested to come along with the underlisted items for registration as follows:</p>
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
                        <p><b>Please note that other requirements will be made available by the school during the registration exercise which is expected to commence immediately.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">RELEASE OF LIST OF SUCCESSFUL CANDIDATES FOR ADMISSION INTO JSS1 IN COMMAND SECONDARY SCHOOLS 2023/2024 ACADEMIC SESSION <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a></marquee>
    </div>
@endsection

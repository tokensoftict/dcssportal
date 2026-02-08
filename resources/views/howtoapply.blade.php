@extends('layout.main')
@section('title',"RECENT NEWS")

@section('content')
    <section data-anim-wrap class="masthead -type-5">

        <div class="pl-45 pr-30">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-lg-7 mt-2 offset-lg-3 col-12">
                        <br/>
                        <h2 class="text-center text-24 text-red-1">DIRECTORATE OF COMMAND SCHOOLS SERVICES</h2><br/>
                        <h5>Application Instructions</h5>
                        <p>For a successful application, candidates are expected to complete the basic registration processes as explained below:</p>
                        <br/>
                        <h5>ONLINE PAYMENT:</h5>
                        <p>Interested Candidates are to visit the Directorate of Command Schools Services [DCSS] admissions portal at <a href="https://www.dcss.sch.ng">https://www.dcss.sch.ng</a> . </p>
                        <p>Click on enroll, and create a personal username and password. </p>
                        <p>Follow the steps to enter all required data and proceed with payment. </p>
                        <p>Payment of N2,500 can be made using bank-issued ATM Debit cards. You shall be directed to the secured Paygate platform</p>
                        <p>Please note that the picture can be saved in any of the following formats: JPEG, PNG</p>
                        <p>Candidates can obtain their Exam Photo Cards from the portal only when payment is confirmed.</p>
                        <p>After completing the application process, candidates are advised to print a Photo Card from the portal. Candidates MUST present their Examination Photo Card at the Examination Centre on the day of the Entrance Examination</p>
                        <p>Once your application has been submitted, you cannot make corrections to it online. Please review your application carefully before you submit.</p>
                        <p>For inquiries and support, please call 08113856079 or email support@dcss.sch.ng or commandentrance@gmail.com</p>

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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">
                BREAKING NEWS: APPLICATION FOR ADMISSION INTO COMMAND SECONDARY SCHOOLS FOR 2026/2027 IS OUT. <a href="{{ route('howtoapply') }}">CLICK HERE TO READ MORE.</a>
                <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a>
        </marquee>
    </div>
@endsection

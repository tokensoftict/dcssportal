@extends('layout.main')
@section('title',"RECENT NEWS")

@section('content')
    <section data-anim-wrap class="masthead -type-5" >

        <div class="pl-45 pr-30">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-lg-7 mt-2 offset-lg-3 col-12">
                        <br/><br/>
                        <h2 align="center">REQUIREMENTS FOR INTERVIEW</h2>
                        <br/>
                        <p>1. This is to announce the release of the results of the Common Entrance Examination held on Saturday, 27 June 2026, for admission into Junior Secondary Schools (JSS1) in Command Secondary Schools for the 2026/2027 Academic Session. The Final Selection Interview for the successful candidates is scheduled to be held from Monday, 3 August to Wednesday, 5 August 2026, in all Command Secondary Schools nationwide. Candidates are advised to check at their various schools of choice and the Division of Education Services at all Nigerian Army Division Headquarters. Successful candidates are requested to report to their various interview centres with the following documents:</p>
                        <br/>
                        <h5> a. Military Personnel’s Children</h5>
                        <ul>
                            <li>(1) Entrance examination photo card.</li>
                            <li>(2) Photocopy of parents’ Military ID card.</li>
                            <li>(3) Original letter of identification from parents’ unit.</li>
                            <li>(4) Birth certificate or sworn declaration of age.</li>
                            <li>(5) Part 2/3 Orders publishing the candidate’s birth.</li>
                            <li>(6) Primary school testimonial.</li>
                            <li>(7) Writing materials.</li>
                            <li>(8) File jacket.</li>
                            <li>(9) Children of discharged personnel are to present a photocopy of the parent's discharge certificate and original letter of identification from a military unit certifying that he/she is a bona fide biological child of the deceased personnel.</li>
                        </ul>
                        <br/>
                        <h5>b. Civilians’ Children</h5>
                        <ul>
                            <li>(1) Entrance examination photo card.</li>
                            <li> (2) Birth certificate or sworn declaration of age.</li>
                            <li> (3) Primary school testimonial.</li>
                            <li> (4) Writing materials.</li>
                            <li> (5) File jacket.</li>
                        </ul>

                        <br/>
                        <p>
                            2. Candidates who fail to provide documents listed in paragraph 1a (1-9) are to be interviewed as children of civilians. In addition, all candidates are to pay the sum of Two Thousand Naira (N2,500.00) only, non-refundable interview fee at their centres.
                        </p>
                        <a href="{{ route("candidates") }}">Click here for the list of successful candidates for interview.</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">
                THE LIST OF SUCCESSFUL CANDIDATES SHORTLISTED FOR INTERVIEW IS OUT. THE FINAL SELECTION INTERVIEW FOR THE SUCCESSFUL CANDIDATES IS SCHEDULED TO BE HELD FROM MONDAY, 3 AUGUST TO WEDNESDAY, 5 AUGUST 2026, IN ALL COMMAND SECONDARY SCHOOLS NATIONWIDE.
                <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a>
        </marquee>
    </div>
@endsection

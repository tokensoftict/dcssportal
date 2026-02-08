@extends('layout.main')
@section('title',"DIRECTORATE OF COMMAND SCHOOLS SERVICE")
@section('top_news')
    <div class="d-flex items-center text-white py-10 border-bottom-light" style="background-color: #00004b;">
        <marquee behavior="alternate" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();" style="padding: 5px 1px"> <a href="#" style="color: white; font-weight: bold; text-transform: uppercase">
                BREAKING NEWS: APPLICATION FOR ADMISSION INTO COMMAND SECONDARY SCHOOLS FOR 2026/2027 IS OUT. <a href="{{ route('howtoapply') }}">CLICK HERE TO READ MORE.</a>
                <span style="background-color: red; padding: 5px 10px; margin-left: 5px; margin-right: 5px">
 </span><span style="color: BLACK"></span></a>
        </marquee>
    </div>
@endsection

@section('content')
    <div class="container">
        <div style="height: 83vh"></div>
    </div>
@endsection


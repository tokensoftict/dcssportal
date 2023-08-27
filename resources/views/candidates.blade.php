@extends('layout.main')
@section('title',"LISTS SUCCESSFUL CANDIDATES")

@section('content')

    <section data-anim-wrap class="masthead -type-5 mt-50">

        <div class="pl-45 pr-30">
            <div class="row y-gap-50 items-center">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-24 text-red-1"> LIST OF SUCCESSFUL CANDIDATES FOR ADMISSION INTO JSS1 IN COMMAND SECONDARY SCHOOLS 2023/2024 ACADEMIC SESSION</h2>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-12">
                                <h6 class="text-center text-17 text-red-1">COMMAND DAY SECONDARY SCHOOL LISTS</h6>
                                <br/>
                                <table class="table table-bordered table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">SCHOOL NAME</th>
                                        <th class="text-center">ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cdss as $dss)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dss['name'] }}</td>
                                            <td><a href="{{ $dss['url'] }}" target="_blank" class="button px-25 h-50 -red-1 text-white ml-20">Download Result</a> </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6 col-12">
                                <h6 class="text-center text-17 text-red-1">COMMAND SECONDARY SCHOOL LISTS</h6>
                                <br/>
                                <table class="table table-bordered table-striped table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">SCHOOL NAME</th>
                                        <th class="text-center">ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($css as $dss)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dss['name'] }}</td>
                                            <td><a  href="{{ $dss['url'] }}" target="_blank" class="button px-25 h-50 -blue-1 text-white ml-20">Download Result</a> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

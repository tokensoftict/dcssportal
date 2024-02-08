
<div>
    <div class="row y-gap-30">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                <div class="tabs -active-purple-2 js-tabs">
                    <div class="tabs__controls d-flex items-center pt-20 px-30 border-bottom-light js-tabs-controls">
                        <button class="text-light-1 lh-12 tabs__button js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">
                            Pending
                        </button>
                        <button class="text-light-1 lh-12 tabs__button js-tabs-button ml-30" data-tab-target=".-tab-item-2" type="button">
                            Completed
                        </button>
                    </div>
                    <div class="tabs__content py-30 px-30 js-tabs-content">
                        <div class="tabs__pane -tab-item-1 is-active">
                            <table class="table" style="width: 100%">
                                <thead class="text-13">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th  class="text-center">Passport</th>
                                    <th  class="text-center">Full Name</th>
                                    <th  class="text-center">Telephone</th>
                                    <th  class="text-center">Email</th>
                                    <th  class="text-center">Status</th>
                                    <td  class="text-center"></td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($this->pendingApplications as $pendingApplication)
                                    <tr class="text-12">
                                        <td  class="text-center">{{ $loop->iteration }}</td>
                                        <td  class="text-center"><a target="_blank" href="{{ route('view_application', ['email'=>$pendingApplication->email]) }}"><img class="img-thumbnail img-fluid" style="width: 80px" alt="{{ $pendingApplication->fullname  }}" src="{{ url('/'.$pendingApplication->passport_path)  }}" width="150"/></a></td>
                                        <td  class="text-center">{{ $pendingApplication->fullname }}</td>
                                        <td  class="text-center">{{ $pendingApplication->telephone }}</td>
                                        <td  class="text-center">{{ $pendingApplication->email }}</td>
                                        <td  class="text-center">{!!   $pendingApplication->exam_number === NULL ? "<b class='text-red-1'>Pending</b>" : "<b class='text-blue-1'>Completed</b>" !!}</td>
                                        <td  class="text-center">
                                            <a href="{{ route('account.make_payment',$pendingApplication->id) }}" class="button text-13 -sm -light-7 -dark-button-dark-2 text-purple-1">Pay Now</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tabs__pane -tab-item-2">
                            <table class="table" style="width: 100%">
                                <thead class="text-13">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th  class="text-center">Passport</th>
                                    <th  class="text-center">Exam Number</th>
                                    <th  class="text-center">Full Name</th>
                                    <th  class="text-center">Telephone</th>
                                    <th  class="text-center">Email</th>
                                    <td  class="text-center"></td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($this->completedApplications as $completedApplication)
                                    <tr class="text-12">
                                        <td  class="text-center">{{ $loop->iteration }}</td>
                                        <td  class="text-center"><img class="img-thumbnail img-fluid" style="width: 80px" alt="{{ $completedApplication->fullname  }}" src="{{ url('/'.$completedApplication->passport_path)  }}" width="150"/> </td>
                                        <td><b>{{ $completedApplication->exam_number }}</b></td>
                                        <td  class="text-center">{{ $completedApplication->fullname }}</td>
                                        <td  class="text-center">{{ $completedApplication->telephone }}</td>
                                        <td  class="text-center">{{ $completedApplication->email }}</td>

                                        <td  class="text-center">

                                            <a  target="_blank" href="{{ route('account.download_photocard',$completedApplication->id) }}" class="button">Photo Card</a>
                                            |
                                            <a target="_blank" href="{{ route('account.download_payment_receipt',$completedApplication->id) }}" class="button">Receipt</a>

                                        </td>
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
</div>

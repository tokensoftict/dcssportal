<div>
    <div class="row y-gap-30">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-3">
                <form class="contact-form respondForm__form row y-gap-20 pt-30" wire:submit.prevent="generateReport">
                    <div class="row">

                        @if(in_array('centers',$this->filter))
                            <div >
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Select Centers</label>
                                <select  name="center" wire:model="center" class="text-16 lh-1 fw-500 text-dark-1 mb-10">
                                    <option value="">Select Center</option>
                                    @foreach($this->centers as $center_)
                                        <option value="{{ $center_->id }}">{{ $center_->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        @if(in_array('schools',$this->filter))
                            <div>
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">School First Choice</label>
                                <select  name="school" wire:model="school" class="text-16 lh-1 fw-500 text-dark-1 mb-10">
                                    <option value="">Select School</option>
                                    @foreach($this->schools as $school_)
                                        <option value="{{ $school_->id }}">{{ $school_->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        @if(in_array('status',$this->filter))
                            <div>
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Payment Status</label>
                                <select   name="payment_status" wire:model="payment_status" class="text-16 lh-1 fw-500 text-dark-1 mb-10">
                                    <option value="">Select Payment Status</option>
                                    @foreach($this->statuses as $key=>$sta)
                                        <option value="{{ $key }}">{{ $sta }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div>
                            <h6>Total Record Count : {{ $this->recordCount }}</h6>
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" style="visibility: hidden">Payment Status</label>
                            <div wire:loading.block wire:target="generateReport,viewReport">
                                <h5 align="center"> Please wait...</h5>
                            </div>
                            @if(auth()->user()->isAdmin())
                            <div wire:loading.remove wire:target="generateReport">
                                <button type="submit" class="button -md -blue-1 align-content-center text-white fw-500 w-1/1">Export </button>
                            </div>
                            @endif
                            <br/>
                            <div wire:loading.remove wire:target="viewReport">
                                <button type="button" wire:click="viewReport" class="button -md -green-1 align-content-center text-white fw-500 w-1/1">Generate Report </button>
                            </div>
                        </div>

                    </div>
                </form>

                <div class="row">
                    <div class="table-responsive">
                    <table class="table mt-4 table-striped table-bordered" style="width: 100%">
                        <thead class="text-13">
                        <tr>
                            <th class="text-center">#</th>
                            <th  class="text-center">Passport</th>
                            <th  class="text-center">Full Name</th>
                            <th  class="text-center">Exam Number</th>
                            <th  class="text-center">Center</th>
                            <th  class="text-center">First School</th>
                            <th  class="text-center">Second School</th>
                            <th  class="text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($this->applications as $application)
                            <tr class="text-12">
                                <td  class="text-center">{{ $loop->iteration }}</td>
                                <td  class="text-center"><a target="_blank" href="{{ route('administrator.view_application', ['email'=>$application->email]) }}"><img class="img-thumbnail img-fluid" style="width: 80px" alt="{{ $application->fullname  }}" src="{{ url('/'.$application->passport_path)  }}" width="100"/></a></td>
                                <td  class="text-center">{{ $application->fullname }}</td>
                                <td  class="text-center">{{ $application->exam_number }}</td>
                                <td  class="text-center">{{ $application->center->name }}</td>
                                <td  class="text-center">{{ $application->school->name }}</td>
                                <td  class="text-center">{{ $application->school2->name }}</td>
                                <td  class="text-center">{!!   $application->exam_number === NULL ? "<b class='text-red-1'>Pending</b>" : "<b class='text-blue-1'>Completed</b>" !!}</td>
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

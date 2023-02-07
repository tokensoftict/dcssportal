<div>
<div class="row y-gap-30">
    <div class="col-sm-12 col-12">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Application Details</h2>
            </div>

            <div class="py-30 px-30">
                    <div align="center">
                        <img class="img-thumbnail img-fluid" style="width: 200px" alt="{{ $this->application->fullname  }}" src="{{ url('/'.$this->application->passport_path)  }}" width="150"/>
                    </div>
                <table class="table table-bordered table-hover table-striped table-responsive mt-20">
                    <tr>
                        <th colspan="3" class="text-center"><b>PERSONAL DETAILS</b></th>
                    </tr>
                    <tr>
                        <td class="text-center"><b>Surname :</b> {{ strtoupper($this->application->surname) }}</td>
                        <td class="text-center"><b>Firstname :</b> {{ strtoupper($this->application->firstname) }}</td>
                        <td class="text-center"><b>Othernames :</b> {{ strtoupper($this->application->othernames) }}</td>
                    </tr>

                    <tr>
                        <td class="text-center"><b>Exam Number :</b> {{ strtoupper($this->application->exam_number) }}</td>
                        <td class="text-center"><b>Gender :</b> {{ strtoupper($this->application->gender) }}</td>
                        <td class="text-center"><b>Age :</b> {{ strtoupper($this->application->age) }}</td>
                    </tr>
                    <tr>
                        <td class="text-center"><b>Telephone :</b> {{ strtoupper($this->application->telephone) }}</td>
                        <td class="text-center"><b>Email Address:</b> {{ strtoupper($this->application->email) }}</td>
                        <td class="text-center"><b>Address :</b> {{ strtoupper($this->application->address) }}</td>
                    </tr>
                    <tr>
                        <th colspan="3" class="text-center"><b>EXAMINATION DETAILS</b></th>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><b>Examination State : </b> {{ strtoupper($this->application->examState->name) }}<br/>
                            <b>Examination Centre : </b> {{ strtoupper($this->application->center->name) }}</td>
                    </tr>
                    <tr>
                        <th colspan="3" class="text-center"><b>SCHOOL DETAILS</b></th>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><b>First Choice - School : </b> {{ strtoupper($this->application->school->name) }}<br/>
                        <b>Second Choice - School : </b> {{ strtoupper($this->application->school2->name) }}</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="text-center"><b>PARENTAL DETAILS</b></th>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="3"><b>Parental Status :</b> {{ strtoupper($this->application->parental_status->name) }}</td>
                    </tr>

                    @if($this->application->parental_status_id == "1" || $this->application->parental_status_id == "2")
                        <tr>
                            <td class="text-center"><b>Parent Names :</b> {{ $this->application->parent_names }}</td>
                            <td class="text-center"><b>Rank :</b> {{ strtoupper($this->application->rank) }}</td>
                            <td class="text-center"><b>SVC :</b> {{ strtoupper($this->application->svc) }}</td>
                        </tr>
                        <tr>
                            <td class="text-center"><b>SVC Number :</b> {{ $this->application->svc_number }}</td>
                            <td class="text-center">
                                <b>Retired :</b> {{ strtoupper( ($this->application->retired == 1 ? "YES" : "NO") ) }}
                                <br/>
                                <b>Retired Number :</b> {{ strtoupper($this->application->retired_number) }}
                            </td>
                            <td class="text-center"> <b>Unit Formation :</b> {{ strtoupper($this->application->unitFormation) }}</td>
                        </tr>
                    @endif

                    @if($this->application->parental_status_id == "4")
                        <tr>
                            <td class="text-center"><b>Parent Names :</b> {{ $this->application->parent_names }}</td>
                            <td class="text-center"><b>Rank :</b> {{ strtoupper($this->application->rank) }}</td>
                            <td class="text-center"><b>SVC :</b> {{ strtoupper($this->application->svc) }}</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center"><b>SVC Number :</b> {{ $this->application->svc_number }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
</div>

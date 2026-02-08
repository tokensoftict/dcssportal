<div>
    @if(isset($this->application->id))
        <form class="contact-form respondForm__form row y-gap-20 pt-30"  wire:submit.prevent="updateApplication">
            @else
                <form class="contact-form respondForm__form row y-gap-20 pt-30"  wire:submit.prevent="processForm">
                    @endif
                    <h3 class="text-20 lh-11 mt-30 mb-10">Personal Details</h3>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-6 mt-lg-0 mt-2">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Surname *</label>
                                    <input type="text" requireds wire:model.defer="surname" name="surname" value="{{ old('surname',"") }}" placeholder="Enter Your Surname">
                                    @if ($errors->has('surname'))
                                        <span class="text-red-3">{{ $errors->first('surname') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 mt-lg-0 mt-2">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">First Name *</label>
                                    <input type="text" requireds wire:model.defer="firstname" name="firstname" value="{{ old('firstname',"") }}" placeholder="Enter Your First Name">
                                    @if ($errors->has('firstname'))
                                        <span class="text-red-3">{{ $errors->first('firstname') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-lg-6 mt-lg-0 mt-2">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Other Names *</label>
                                    <input type="text" requireds wire:model.defer="othernames" name="othernames" value="{{ old('othernames',"") }}" placeholder="Enter Your Other Names">
                                    @if ($errors->has('othernames'))
                                        <span class="text-red-3">{{ $errors->first('othernames') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 mt-lg-0 mt-2">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email address *</label>
                                    <input type="email" {{ isset($this->application->id) ? "readonly" : "" }} requireds wire:model.defer="email" name="email" value="{{ old('email',"") }}" placeholder="Email Address">
                                    <span class="text-red-3" style="font-size:10px; font-weight: bolder">Please note that this email address will be verified. Kindly enter a working email address.</span>
                                    @if ($errors->has('email'))
                                        <span class="text-red-3">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                            <img id="frame"  src="{{ $this->passport !== NULL ? (is_string($this->passport) ? $this->passport : $this->passport->temporaryUrl()) : "https://dcss.sch.ng/asset/images/defaultavatar.jpg" }}"  style="width:100%;height:auto;" class="img-fluid img-thumbnail pull-right mt-5" alt="Passport">
                            <input class="form-control" style="width: 0;height: 0;padding: 0; margin: 0" type="file" wire:model="passport" name="passport" id="formFile" onchange="preview()">
                            <div wire:loading wire:target="passport">Uploading...</div>
                            @if ($errors->has('passport'))
                                <div class="text-red-3 d-block">{{ $errors->first('passport') }}</div>
                            @endif
                            @if ($this->errorMessage != "")
                                <div class="text-red-3 d-block">{{ $this->errorMessage }}</div>
                            @endif
                            <button type="button" onclick="formFile.click()" class="button -icon -purple-1 text-white pull-right mt-15">Upload</button>



                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Gender *</label>
                            <select requireds name="gender" wire:model.defer="gender" class="text-16 lh-1 fw-500 text-dark-1 mb-10">
                                <option value="">Select Gender</option>
                                <option {{ old('gender',"") == 'Male' ? 'selected' : ''}} value="Male">Male</option>
                                <option {{ old('gender',"") == 'Female' ? 'selected' : ''}} value="Female">Female</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="text-red-3">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Age *</label>
                            <input type="number" requireds wire:model.defer="age" class="text-16 lh-1 fw-500 text-dark-1 mb-10" name="age" value="{{ old('age',"") }}" placeholder="Age">
                            @if ($errors->has('age'))
                                <span class="text-red-3">{{ $errors->first('age') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Date Of Birth *</label>
                            <input type="date" wire:model.defer="dob" class="text-16 lh-1 fw-500 text-dark-1 mb-10" requireds name="dob" value="{{ old('dob',"") }}" placeholder="Date of Birth">
                            @if ($errors->has('dob'))
                                <span class="text-red-3">{{ $errors->first('dob') }}</span>
                            @endif
                        </div>



                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Telephone *</label>
                            <input type="text" requireds  wire:model.defer="telephone" name="telephone" value="{{ old('telephone',"") }}" placeholder="Telephone">
                            @if ($errors->has('telephone'))
                                <span class="text-red-3">{{ $errors->first('telephone') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">State Of Origin *</label>
                            <select class=""  wire:model.defer="state_id" name="state_id">
                                <option value="">Select State</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('state_id'))
                                <span class="text-red-3">{{ $errors->first('state_id') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Address</label>
                            <input type="text" requireds wire:model.defer="address" name="address" value="{{ old('address',"") }}" placeholder="Address">
                            @if ($errors->has('address'))
                                <span class="text-red-3">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>

                    <h3 class="text-20 lh-11 mt-30 mb-10">Examination Details</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Examination State *</label>
                            <select wire:model="exam_state_id" class="" name="exam_state_id">
                                <option value="">Select State</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('exam_state_id'))
                                <span class="text-red-3">{{ $errors->first('exam_state_id') }}</span>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Examination Centre *</label>
                            <select class="" wire:model.defer="center_id" name="center_id">
                                <option value="" selected>Select Centre</option>
                                @foreach($centers as $center)
                                    <option value="{{ $center->id }}">{{ $center->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('center_id'))
                                <span class="text-red-3">{{ $errors->first('center_id') }}</span>
                            @endif
                        </div>
                    </div>


                    <h3 class="text-20 lh-11 mt-30 mb-10">School Details</h3>

                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="text-10 text-center lh-11 mt-10 mb-30">First Choice</h6>
                            <div class="form-group mb-15">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">School Type *</label>
                                <select class="" wire:model="school_type_id" name="school_type_id">
                                    <option value="">Select Type</option>
                                    @foreach($schoolTypes as $schoolType)
                                        <option value="{{ $schoolType->id }}">{{ $schoolType->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('school_type_id'))
                                    <span class="text-red-3">{{ $errors->first('school_type_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">School *</label>
                                <select class="" wire:model.defer="school_id" name="school_id">
                                    <option value="" selected>Select School</option>
                                    @foreach($filtered_school_type_1s as $filtered_school_type_1)
                                        <option value="{{ $filtered_school_type_1->id }}">{{ $filtered_school_type_1->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('school_id'))
                                    <span class="text-red-3">{{ $errors->first('school_id') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="text-10 lh-11 text-center mt-10 mb-30">Second Choice</h6>
                            <div class="form-group mb-15">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">School Type *</label>
                                <select class="" wire:model="school_type_id2" name="school_type_id2">
                                    <option value="">Select Type</option>
                                    @foreach($schoolTypes as $schoolType)
                                        <option value="{{ $schoolType->id }}">{{ $schoolType->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('school_type_id2'))
                                    <span class="text-red-3">{{ $errors->first('school_type_id2') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">School *</label>
                                <select class="" wire:model.defer="school2_id" name="school2_id">
                                    <option value="" selected>Select School</option>
                                    @foreach($filtered_school_type_2s as $filtered_school_type_2)
                                        <option value="{{ $filtered_school_type_2->id }}">{{ $filtered_school_type_2->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('school2_id'))
                                    <span class="text-red-3">{{ $errors->first('school2_id') }}</span>
                                @endif
                            </div>


                        </div>
                    </div>


                    <h3 class="text-20 lh-11 mb-10 mt-30">Parent Details</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Parental Status *</label>
                            <select wire:model="parental_status_id" requireds class="" name="parental_status_id">
                                <option value="">-- Please Select --</option>
                                @foreach($parental_statuses as $parental_statuse)
                                    <option value="{{ $parental_statuse->id }}">{{ $parental_statuse->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('parental_status_id'))
                                <span class="text-red-3">{{ $errors->first('parental_status_id') }}</span>
                            @endif
                        </div>

                        @if($this->parental_status_id === "1" || $this->parental_status_id === "2")
                            <div class="row mt-30">
                                <div class="col-lg-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">  Parent Names</label>
                                    <input type="text" requireds wire:model.defer="parent_names" name="parent_names" value="{{ old('parent_names',"") }}" placeholder="Parent Names">
                                    @error('parent_names')  <span class="text-red-3">{{ $message }}</span> @enderror
                                    @if ($errors->has('parent_names'))

                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"> Rank</label>
                                    <input type="text" requireds wire:model.defer="rank" name="rank" value="{{ old('rank',"") }}" placeholder="Rank">
                                    @if ($errors->has('rank'))
                                        <span class="text-red-3">{{ $errors->first('rank') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"> SVC</label>
                                    <input type="text" requireds wire:model.defer="svc" name="svc" value="{{ old('svc',"") }}" placeholder="SVC">
                                    @if ($errors->has('svc'))
                                        <span class="text-red-3">{{ $errors->first('svc') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-lg-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">SVC Number *</label>
                                    <input type="text" requireds wire:model.defer="svc_number" name="svc_number" value="{{ old('svc_number',"") }}" placeholder="SVC Number">
                                    @if ($errors->has('svc_number'))
                                        <span class="text-red-3">{{ $errors->first('svc_number') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Unit/Formation *</label>
                                    <input type="text" requireds  wire:model.defer="unitFormation" name="unitFormation" value="{{ old('unitFormation',"") }}" placeholder="Unit / Formation">
                                    @if ($errors->has('unitFormation'))
                                        <span class="text-red-3">{{ $errors->first('unitFormation') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <div class="text-16 lh-12 text-dark-1 fw-500 mb-30">Are you retired?</div>
                                    <div class="row y-gap-15">
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center ">
                                                <div class="radio">
                                                    <input type="radio" wire:model="select_retired" name="select_retired" value="Yes">
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="lh-1 text-14 text-dark-1 ml-12">Yes</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-radio d-flex items-center ">
                                                <div class="radio">
                                                    <input type="radio" wire:model="select_retired" name="select_retired" value="No">
                                                    <div class="radio__mark">
                                                        <div class="radio__icon"></div>
                                                    </div>
                                                </div>
                                                <div class="lh-1 text-14 text-dark-1 ml-12">No</div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('select_retired'))
                                        <span class="text-red-3">{{ $errors->first('select_retired') }}</span>
                                    @endif
                                </div>
                            </div>
                            @if($this->select_retired == "Yes")
                                <div class="row mt-25">
                                    <div class="col-lg-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Retired Number *</label>
                                        <input type="text" requireds wire:model.defer="retired_number" name="retired_number" value="{{ old('retired_number',"") }}" placeholder="Retired Number">
                                        @if ($errors->has('retired_number'))
                                            <span class="text-red-3">{{ $errors->first('retired_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <div class="row mt-25">
                                <div class="col-lg-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Part Two Order *</label>
                                    <input class="form-control" type="file" wire:model="part_two_order" name="part_two_order" id="part_two_order">
                                    @if ($errors->has('part_two_order'))
                                        <span class="text-red-3">{{ $errors->first('part_two_order') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Military ID Card (Valid) *</label>
                                    <input class="form-control" type="file" wire:model="id_card" name="part_two_order" id="part_two_order">
                                    @if ($errors->has('id_card'))
                                        <span class="text-red-3">{{ $errors->first('id_card') }}</span>
                                    @endif
                                </div>
                            </div>

                        @endif

                        @if($this->parental_status_id === "4")
                            <div class="row mt-30">
                                <div class="col-lg-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"> Parent Names</label>
                                    <input type="text" requireds name="parent_names" wire:model.defer="parent_names" value="{{ old('parent_names',"") }}" placeholder="Parent Names">
                                    @if ($errors->has('parent_names'))
                                        <span class="text-red-3">{{ $errors->first('parent_names') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"> Rank</label>
                                    <input type="text" requireds name="rank" wire:model.defer="rank" value="{{ old('rank',"") }}" placeholder="Rank">
                                    @if ($errors->has('rank'))
                                        <span class="text-red-3">{{ $errors->first('rank') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"> SVC</label>
                                    <input type="text" requireds name="svc"  wire:model.defer="svc" value="{{ old('svc',"") }}" placeholder="SVC">
                                    @if ($errors->has('svc'))
                                        <span class="text-red-3">{{ $errors->first('svc') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-lg-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">SVC Number *</label>
                                    <input type="text" requireds name="svc_number" wire:model.defer="svc_number" value="{{ old('svc_number',"") }}" placeholder="SVC Number">
                                    @if ($errors->has('svc_number'))
                                        <span class="text-red-3">{{ $errors->first('svc_number') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Military ID Card (Valid) *</label>
                                    <input class="form-control" type="file" wire:model="id_card" name="part_two_order" id="part_two_order">
                                    @if ($errors->has('id_card'))
                                        <span class="text-red-3">{{ $errors->first('id_card') }}</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>

                    @if(!isset($this->application->id) )
                        <h3 class="text-20 lh-11 mb-10 mt-30">Account Security</h3>
                        <div class="row mt-20">
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password *</label>
                                <input type="password" requireds name="password" wire:model.defer="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-red-3">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm Password *</label>
                                <input type="password" requireds name="password_confirmation" wire:model.defer="password_confirmation" placeholder="Confirm Password">
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-red-3">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="col-12 mt-40">
                        <div wire:loading.block wire:target="processForm,updateApplication">
                            <h5 align="center"> Processing Form Please wait... <i class="fa fa-spin fa-spinner"></i></h5>
                        </div>

                        <div wire:loading.block wire:target="passport,part_two_order,id_card">
                            <h5 align="center">Uploading Please wait... <i class="fa fa-spin fa-spinner"></i></h5>
                        </div>

                        <div wire:loading.remove wire:target="processForm,updateApplication,passport,part_two_order,id_card">
                            @if(isset($this->application->id))
                                <button type="submit" name="submit" id="submit" class="button -md -red-1 align-content-center text-white fw-500 w-1/1">
                                    Update Application
                                </button>
                            @else
                                <button type="submit" name="submit" id="submit" class="button -md -red-1 align-content-center text-white fw-500 w-1/1">
                                    Register
                                </button>
                            @endif
                        </div>
                    </div>
                </form>


                <script>

                    window.addEventListener('scrollToTop', (e) => {
                        window.scrollTo({top: 0, behavior: 'smooth'});
                    });

                </script>
</div>



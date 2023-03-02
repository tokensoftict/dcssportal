<div>
    <div class="row y-gap-30">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-3">
                <form class="contact-form respondForm__form row y-gap-20 pt-30" wire:submit.prevent="generateReport">
                    <div class="row">

                        @if(in_array('centers',$this->filter))
                            <div >
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Select Centers</label>
                                <select required name="center" wire:model.defer="center" class="text-16 lh-1 fw-500 text-dark-1 mb-10">
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
                                <select required name="school" wire:model.defer="school" class="text-16 lh-1 fw-500 text-dark-1 mb-10">
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
                                <select required  name="payment_status" wire:model.defer="payment_status" class="text-16 lh-1 fw-500 text-dark-1 mb-10">
                                    <option value="">Select Payment Status</option>
                                    @foreach($this->statuses as $key=>$sta)
                                        <option value="{{ $key }}">{{ $sta }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div>
                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10" style="visibility: hidden">Payment Status</label>
                            <div wire:loading.block wire:target="generateReport">
                                <h5 align="center"> Please wait...</h5>
                            </div>
                            <div wire:loading.remove wire:target="generateReport">
                                <button type="submit" class="button -md -blue-1 align-content-center text-white fw-500 w-1/4">Export </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

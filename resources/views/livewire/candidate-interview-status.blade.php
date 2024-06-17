<div>
    <form wire:submit.prevent="checkInterviewStatus" class="contact-form respondForm__form row y-gap-20 pt-30 text-center">
        <div class="col-lg-6 col-12 mt-lg-0 mt-2 offset-sm-3">
            <label class="text-16 text-center d-block lh-1 fw-500 text-dark-1 mb-10">Enter Candidate Exam Number</label>
            <input type="text"  wire:model.defer="exam_number" name="exam_number"  placeholder="Candidate Exam Number">
            @if ($errors->has('exam_number'))
                <span class="text-red-3">{{ $errors->first('exam_number') }}</span>
            @endif

            @if($showSuccess)
            <div class="alert alert-success mt-4" role="alert">
                <h5 class="text-green-5">Congratulation ! {{ $successMessage }}</h5>
            </div>
            <!--
                <a target="new" href="{{ route('account.download_photocard', $this->info['id']) }}">Download Photo-card</a>
              -->
            @endif

            @if($showPending)
            <div class="alert alert-success mt-4" role="alert">
                <h5 class="text-red-1">Your Interview Status is still pending, please check back.</h5>
            </div>
            @endif

            <div wire:loading.block wire:target="checkInterviewStatus">
                <h5 align="center"> Checking Status Please wait... <i class="fa fa-spin fa-spinner"></i></h5>
            </div>

            <div wire:loading.remove wire:target="checkInterviewStatus" align="center" class="mt-4">
                <button type="submit" name="submit" id="submit" class="button -md -red-1 text-white fw-500 w-1">
                    Check Interview Status
                </button>
            </div>

        </div>

    </form>
</div>

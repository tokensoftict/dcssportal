<div>

    <form wire:submit.prevent="importCandidate" class="contact-form respondForm__form row y-gap-20 pt-30 text-center">
        <div class="col-lg-6 col-12 mt-lg-0 mt-2 offset-sm-3">
            <label class="text-16 text-center d-block lh-1 fw-500 text-dark-1 mb-10">Select Excel File</label><br/>
            <input type="file"  wire:model.defer="excelFile" name="interview_candidate"  placeholder="Select Excel File">
            @if ($errors->has('interview_candidate'))
                <span class="text-red-3">{{ $errors->first('interview_candidate') }}</span>
            @endif

            <div wire:loading.block wire:target="importCandidate">
                <h5 align="center"> Uploading File Please wait... <i class="fa fa-spin fa-spinner"></i></h5>
            </div>
            <br/><br/>
            <div wire:loading.remove wire:target="importCandidate" align="center" class="mt-4">
                <button type="submit" name="submit" id="submit" class="button -md -red-1 text-white fw-500 w-1">
                    Upload Candidate
                </button>
            </div>

            <a href="{{ asset('template/interview_status.xlsx') }}">Download Template</a>

        </div>
    </form>

</div>

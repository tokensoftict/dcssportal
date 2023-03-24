<div>


    <div class="row y-gap-30">

        <div class="col-12">

            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">{{ $this->title }}</h2>
            </div>


            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-5">

                <form wire:submit.prevent="saveUser" class="contact-form row y-gap-30">

                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">First Name</label>

                        <input type="text" required wire:model.defer="firstname" placeholder="First Name">
                        @error('firstname') <span class="text-red-1">{{ $message }}</span> @enderror
                    </div>


                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Other Names</label>

                        <input type="text" required  wire:model.defer="othernames" placeholder="Other Names">
                        @error('othernames') <span class="text-red-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>

                        <input type="email" required wire:model.defer="email" placeholder="Email Address">
                        @error('email') <span class="text-red-1">{{ $message }}</span> @enderror
                    </div>


                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone Number</label>

                        <input type="text" required wire:model.defer="phone" placeholder="Phone Number">
                        @error('phone')  <span class="text-red-1">{{ $message }}</span> @enderror
                    </div>


                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">User Type</label>
                        <select wire:model.defer="is_admin">
                            <option value="">Select Type</option>
                            <option value="1">Administrator</option>
                            <option value="2">Dcss Administrator</option>
                            <option value="3">Upperlink Administrator</option>
                        </select>
                        @error('is_admin') <span class="text-red-1">{{ $message }}</span> @enderror
                    </div>


                    <div class="col-12">

                        <div wire:loading.block wire:target="saveUser">
                            <h5 class="text-red-1"> Submitting Information Please wait... <i class="fa fa-spin fa-spinner"></i> </h5>
                        </div>

                        <div wire:loading.remove wire:target="saveUser">
                            <button type="submit" class="button -md -purple-1 text-white">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

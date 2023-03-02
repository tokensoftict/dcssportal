<div>

    <div class="row y-gap-30">
        <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-5">

                <form wire:submit.prevent="updateAccount" class="contact-form row y-gap-30">

                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">First Name</label>

                        <input type="text" required wire:model.defer="firstname" placeholder="First Name">
                    </div>


                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Other Names</label>

                        <input type="text" required  wire:model.defer="othernames" placeholder="Other Names">
                    </div>

                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>

                        <input type="email" required wire:model.defer="email" placeholder="Email Address">
                    </div>


                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone Number</label>

                        <input type="text" required wire:model.defer="phone" placeholder="Phone Number">
                    </div>

                    <div class="col-md-7">

                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Password</label>

                        <input type="password" wire:model.defer="password" placeholder="Password">
                        <span class="d-block text-red-1">Leave empty if you don't want change your password</span>
                    </div>


                    <div class="col-12">

                        <div wire:loading.block wire:target="updateAccount">
                            <h5 class="text-red-1"> Submitting Information Please wait... <i class="fa fa-spin fa-spinner"></i> </h5>
                        </div>

                        <div wire:loading.remove wire:target="updateAccount">
                            <button type="submit" class="button -md -purple-1 text-white">Save Changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

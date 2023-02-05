<div class="row y-gap-30">
    <div class="col-sm-7 col-12 offset-sm-2">
        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Payment Details</h2>
            </div>

            <div class="py-30 px-30 text-center">

                <img class="w-1/3" alt="{{ $this->application->fullname  }}" src="{{ url('/passport/'.$this->application->passport_path)  }}" width="150"/>

                <p><b>First Name: </b> : {{ strtoupper($this->application->surname) }}</p>
                <p><b>Last Name: </b> : {{ ucwords($this->application->firstname) }}</p>
                <p><b>Middle Name </b> : {{ ucwords($this->application->othernames) }}</p>
                <p><b>Address </b> : {{ ucwords($this->application->address) }}</p>
                <p><b>Telephone </b> : {{ ucwords($this->application->telephone) }}</p>

                <hr/>

                <span class="text-17 d-block">APPLICATION FEE</span>

                <b class="text-24">&#8358; {{ number_format( $this->session->form_fee,2) }}</b>

                <hr/>

                <br/>

                <div wire:loading.block>
                    <h5 align="center" class="text-red-1"> Generating Transaction Please wait...</h5>
                </div>
                <div wire:loading.remove>
                    <div align="center">
                        <button  type="button" wire:click="generateTransactionDetails" class="button -md  -outline-red-1 text-red-1">PAY &#8358; {{ number_format( $this->session->form_fee,2) }} NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('payNow', (e) => {
        window.payGateCheckout(JSON.parse(e.detail.body));
    });
</script>


<div>
    <div class="row y-gap-30">
        <div class="col-sm-7 col-12 offset-sm-2">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                <div class="d-flex items-center py-20 px-30 border-bottom-light">
                    <h2 class="text-17 lh-1 fw-500">Payment Details</h2>
                </div>

                <div class="py-30 px-30 text-center">

                    <img class="w-1/3" alt="{{ $this->application->fullname  }}" src="{{ url('/'.$this->application->passport_path)  }}" width="150"/>

                    <p><b>First Name: </b> : {{ strtoupper($this->application->surname) }}</p>
                    <p><b>Last Name: </b> : {{ ucwords($this->application->firstname) }}</p>
                    <p><b>Middle Name </b> : {{ ucwords($this->application->othernames) }}</p>
                    <p><b>Address </b> : {{ ucwords($this->application->address) }}</p>
                    <p><b>Telephone </b> : {{ ucwords($this->application->telephone) }}</p>

                    <hr/>

                    <span class="text-17 d-block">APPLICATION FEE</span>

                    <b class="text-24">&#8358; {{ number_format( $this->session->form_fee,2) }}</b>

                    <hr/>



                    <span class="text-17 d-block">SELECT PAYMENT GATEWAY</span>
                    <br/>

                    <div id="box">
                        <div style="width:100%;display:flex;flex-direction:row;justify-content:space-between;">
                            <label style="cursor:pointer; width:75%;display:block">
                                <input type="radio"  wire:model="paymentGateWay" name="pay" value="INTERSWITCH-PAYMENTGATEWAY" checked>
                                <img style="width: 80%;padding:15px;display:block;margin:auto; border:1px solid #CCC;" src="https://www.interswitchgroup.com/assets/images/home/interswitch_logo.svg">
                            </label>

                            <label style="cursor:pointer; width:80%;display:block">
                                <input type="radio"  wire:model="paymentGateWay" name="pay" value="UPPERLINKPAYGATE">
                                <img style="width: 72%;padding:15px; display:block;margin:auto;border:1px solid #CCC;" src="https://paygate.upperlink.ng/assets/images/logo/logo.png">
                            </label>
                        </div>

                    </div>

                    <hr/>

                    <br/>
                    <div wire:target="generateTransactionDetails" wire:loading.block>
                        <h5 align="center" class="text-red-1"> Generating Transaction Please wait...</h5>
                    </div>
                    <div wire:target="paymentGateWay" wire:loading.block>
                        <h5 align="center" class="text-red-1"> Please wait...</h5>
                    </div>
                    @if($this->paymentSlipUrl === "")
                        <div wire:target="generateTransactionDetails,paymentGateWay" wire:loading.remove>
                            <div align="center">
                                <button  type="button" wire:click="generateTransactionDetails" class="button -md  -outline-red-1 text-red-1">PAY &#8358; {{ number_format( $this->session->form_fee,2) }} NOW</button>
                            </div>
                        </div>
                    @endif

                    @if($this->paymentSlipUrl !== "")
                        <div>
                            <div align="center">
                                <a href="{{ $this->paymentSlipUrl }}" target="_new"  class="button -md  -outline-green-1 text-green-1">Print Payment Slip</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('payNow', (e) => {
            window.payGateCheckout(JSON.parse(e.detail.body));
        });

        window.addEventListener('errorGeneratingTransaction', (e) => {

        });

        window.addEventListener('successGeneratingTransaction', (e) => {

        });
    </script>

</div>

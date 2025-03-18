
<div>
    <div class="row y-gap-30">
        <div class="col-12">
            <form class="contact-form respondForm__form row y-gap-20 pt-30" wire:submit.prevent="generateReport">
                <div class="row">

                    <div >
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">From</label>
                        <input required type="date" name="center" wire:model="from" class="text-16 lh-1 fw-500 text-dark-1 mb-10"/>
                    </div>
                    <div >
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">To</label>
                        <input required type="date" name="center" wire:model="to" class="text-16 lh-1 fw-500 text-dark-1 mb-10"/>
                    </div>

                    <div>
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
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100 p-3">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table mt-4 table-striped table-bordered" style="width: 100%">
                            <thead class="text-13">
                            <tr>
                                <th class="text-center">#</th>
                                <th  class="text-center">Transaction ID</th>
                                <th  class="text-center">Surname</th>
                                <th  class="text-center">First Name</th>
                                <th  class="text-center">Last Names</th>
                                <th  class="text-center">Amount</th>
                                <th  class="text-center">Currency</th>
                                <th  class="text-center">Gateway</th>
                                <th  class="text-center">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($this->completedApplication as $transaction)
                                <tr class="text-12">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $transaction->transactionId }}</td>
                                    <td class="text-center"> {{ strtoupper($transaction->surName) }}</td>
                                    <td class="text-center">{{ strtoupper($transaction->firstName) }}</td>
                                    <td class="text-center">{{ strtoupper($transaction->lastName) }}</td>
                                    <td class="text-center">{{ number_format($transaction->amount) }}</td>
                                    <td class="text-center">{{ $transaction->currency }}</td>
                                    <td class="text-center">{{ $transaction->gateway }}</td>
                                    <td class="text-center">{{ $transaction->created_at->toDateTimeString() }}</td>
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


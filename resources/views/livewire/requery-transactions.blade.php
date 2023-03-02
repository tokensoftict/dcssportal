<div>
    <div class="row y-gap-30">
        <div class="col-sm-12 col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                <div class="d-flex items-center py-20 px-30 border-bottom-light">
                    <h2 class="text-17 lh-1 fw-500">Transaction List(s)</h2>
                </div>

                <div class="py-30 px-30 text-center text-11">
                    <table class="table" style="width: 100%">
                        <thead class="text-13">
                        <tr>
                            <th class="text-center">#</th>
                            <th  class="text-center">Name</th>
                            <th  class="text-center">Transaction ID</th>
                            <th  class="text-center">Amount</th>
                            <th  class="text-center">Payment Gateway</th>
                            <th  class="text-center">Email</th>
                            <th  class="text-center">Status</th>
                            <td  class="text-center">Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaction->surName }} {{ $transaction->firstName }} {{ $transaction->lastName }}</td>
                                <td>{{ $transaction->transactionId }}</td>
                                <td>{{ number_format($transaction->amount,2) }}</td>
                                <td>{{ $transaction->gateway }}</td>
                                <td>{{ $transaction->email }}</td>
                                <td>{!! $this->status[$transaction->status] !!}</td>
                                <td>
                                    @if($transaction->status == "0")
                                        <div wire:target="checkTransaction({{ $transaction->id }})" wire:loading.block>
                                            <h6 align="center" class="text-red-1"><i class="fa fa-spinner fa-spin"></i> Please wait...</h6>
                                        </div>
                                        <div wire:target="checkTransaction({{ $transaction->id}})"  wire:loading.remove>
                                            <button wire:click="checkTransaction({{ $transaction->id }})" class="button -icon -purple-3 text-11 text-purple-1">
                                                Re-query &nbsp;<i class="icon-check text-11 "></i>
                                            </button>
                                        </div>
                                    @else
                                        <button disabled class="button -icon -purple-3 text-11 text-yellow-3">
                                            No Action
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>

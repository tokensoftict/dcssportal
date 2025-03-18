<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Transaction ID</th>
        <th>Surname</th>
        <th>First Name</th>
        <th>Last Names</th>
        <th>Amount</th>
        <th>Currency</th>
        <th>Gateway</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $transaction->transactionId }}</td>
            <td>{{ strtoupper($transaction->surName) }}</td>
            <td>{{ strtoupper($transaction->firstName) }}</td>
            <td>{{ strtoupper($transaction->lastName) }}</td>
            <td>{{ number_format($transaction->amount) }}</td>
            <td>{{ $transaction->currency }}</td>
            <td>{{ $transaction->gateway }}</td>
            <td>{{ $transaction->created_at->toDateTimeString() }}</td>
            <td class="text-center">Completed</td>
        </tr>
    @endforeach
    </tbody>
</table>

@extends('app')

@section('content')
    <h3 class="text-center p-2"> Transactions List</h3>

  
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Amount</th>
                <th>Transaction Type</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->user->name }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->transaction_type }}</td>
                    <td>{{ $transaction->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

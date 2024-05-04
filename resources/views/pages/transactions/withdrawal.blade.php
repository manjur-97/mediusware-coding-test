@extends('app')

@section('content')
    <h3 class="text-center p-2"> Withdrawals List</h3>


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
            @foreach ($withdrawals as $withdrawal)
                <tr>
                    <td>{{ $withdrawal->user->name }}</td>
                    <td>{{ $withdrawal->amount }}</td>
                    <td>{{ $withdrawal->transaction_type }}</td>
                    <td>{{ $withdrawal->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection

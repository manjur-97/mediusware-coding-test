@extends('app')

@section('content')
    <h3 class="text-center p-2"> Deposit List</h3>


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
            @foreach ($deposits as $deposit)
                <tr>
                    <td>{{ $deposit->user->name }}</td>
                    <td>{{ $deposit->amount }}</td>
                    <td>{{ $deposit->transaction_type }}</td>
                    <td>{{ $deposit->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection

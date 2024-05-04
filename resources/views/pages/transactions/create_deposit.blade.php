@extends('app')

@section('content')
    <h3 class="text-center p-2"> Add Deposit</h3>

    <form action="{{url('/store_deposit')}}" method="POST">
        @csrf
        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ old('name', $user->id) }}">
        <div class="form-group">
            <label for="name">User Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" readonly>
        </div>

        <div class-group>
            <label for="account_type">Account Type:</label>
            <select class="form-control" id="account_type" name="account_type" readonly>
                <option value="{{ $user->account_type }}" selected>{{ $user->account_type }}</option>
            </select>
        </div>

        <div class="form-group" >
            <label for="balance">Balance:</label>
            <input type="number" step="0.01" class="form-control" id="balance" name="balance"
                value="{{ old('balance', $user->balance) }}" readonly>
        </div>

        <div class="form-group" >
            <label for="amount">* Add Deposite Amount:</label>
            <input type="number" step="0.01" class="form-control" id="amount" name="amount"
                required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Save</button>
    </form>
@endsection

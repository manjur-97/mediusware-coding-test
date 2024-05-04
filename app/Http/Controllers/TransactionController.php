<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboard');
    }
    public function transaction()
    {

        $user = Auth::user();
        $transactions = Transaction::where('user_id', $user->id)->with('user')->get();

        return view('pages.transactions.transaction', compact('transactions'));
    }
    public function deposit()
    {

        $user = Auth::user();
        $deposits = Transaction::where('user_id', $user->id)->where('transaction_type', 'Deposit')->with('user')->get();

        return view('pages.transactions.deposit', compact('deposits'));
    }
    public function createDeposit()
    {


        $user = Auth::user();
        // dd($user );

        return view('pages.transactions.create_deposit', compact('user'));
    }
    public function storeDeposit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,id',
            'amount' => 'required|numeric|min:0.01',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::find($request->user_id);

        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->transaction_type = "Deposit";
        $transaction->amount = $request->amount;
        $transaction->fee = 0.00;

        $now = new DateTime('now');
        $transaction->date = $now->format('Y-m-d');

        try {
            $transaction->save();
            $user->balance += $transaction->amount;
            $user->save();

            return redirect()->route('transaction')
                ->with('success', `Successfully Deposit  $transaction->amount!`);
        } catch (Exception $e) {

            Log::error("Error during deposit: " . $e->getMessage());

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function withdrawal()
    {

        $user = Auth::user();
        $withdrawals = Transaction::where('user_id', $user->id)->where('transaction_type', 'Withdrawal')->with('user')->get();

        return view('pages.transactions.withdrawal', compact('withdrawals'));
    }
    public function createWithdrawal()
    {


        $user = Auth::user();
        // dd($user );

        return view('pages.transactions.create_withdrawal', compact('user'));
    }
    public function storeWithdrawal(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,id',
            'amount' => 'required|numeric|min:0.01',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $user = User::find($request->user_id);

        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->transaction_type = "Withdrawal";
        $transaction->amount = $request->amount;

        $transaction_fee = $this->transactionFee($user, $request->amount);
        $transaction->fee =  $transaction_fee;


        $now = new DateTime('now');
        $transaction->date = $now->format('Y-m-d');

        try {
            $transaction->save();
            $user->balance -= ($transaction->amount + $transaction->fee);
            $user->save();

            return redirect()->route('transaction')
                ->with('success', `Successfully Deposit  $transaction->amount!`);
        } catch (Exception $e) {

            Log::error("Error during deposit: " . $e->getMessage());

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    private function transactionFee($user, $amount)
    {
        $fee = 0; // Default fee rate

        if ($user->account_type === 'Individual') {
            // Free withdrawal on Fridays
            if (now()->isFriday()) {
                return 0;
            }



            // Free first 1K per transaction
            if ($amount <= 1000) {
                return 0;
            } else {
                $fee = 0.00015;
                $amountToCharge = $amount - 1000;
            }

            // Free first 5K withdrawal per month
            $monthlyWithdrawal = Transaction::where('user_id', $user->id)
                ->where('transaction_type', 'Withdrawal')
                ->whereMonth('date', now()->month)
                ->sum('amount');
            if ($monthlyWithdrawal <= 5000) {
                return 0;
            } else {
                $amountToCharge =   $amountToCharge;
            }

            $fee = $amountToCharge * $fee;
        } else if ($user->account_type === 'Business') {
            $totalWithdrawal = Transaction::where('user_id', $user->id)
                ->where('transaction_type', 'Withdrawal')
                ->sum('amount');

            if ($totalWithdrawal >= 50000) {
                $fee = $amount * 0.00015;
            } else {
                $fee = $amount * 0.00025;
            }
        }

        return $fee;
    }
}

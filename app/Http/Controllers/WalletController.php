<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\Gateway;
use App\Models\User;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index(Request $req)
    {
        $gateways = Gateway::where('status', 1)->get();
        $user = Auth::user();
        $balance = $user->wallet->balance;

        $transactions = $user->transactions()->with('fund')->orderBy('id', 'desc');
        $withdrawals = $user->withdrawals()->orderBy('id', 'desc');
        if ($req != null && $req->perPage) {
            $transactions =  $transactions->paginate($req->perPage);
            $withdrawals =  $withdrawals->paginate($req->perPage);
        } else {
            $transactions =  $transactions->paginate(10);
            $withdrawals =  $withdrawals->paginate(10);
        }
        return Inertia::render('Wallet', [
            'current_balance' => $balance,
            'transactions' => $transactions,
            'withdrawals' => $withdrawals,
            'gateways' => $gateways
        ]);
    }
    public function AddAmountToWallet(Request $request)
    {
        $request->validate(['gateway' => 'required|exists:gateways,code']);
        $request->merge(['type' => 'wallet']);
        $fund_request = PaymentController::addFundRequest($request);
        if ($fund_request['fund'] ?? false) {
            request()->session()->flash('alert', [
                'type' => 'info',
                'message' => 'Deposit Request Created Successfully',
            ]);
            return redirect()->back()->withResponseData([
                'fund' => $fund_request['fund']
            ]);
        } else {
            request()->session()->flash('alert', [
                'type' => 'error',
                'message' => $fund_request,
            ]);
            return redirect()->back()->withErrors($fund_request);
        }
    }
    public function withdrawAmount(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'account_holder' => 'required',
            'account_number' => 'required',
            'bank' => 'required',
            'additional_note' => 'required',
        ]);
        $user = Auth::user();
        if ($user->balanceInt > $request->amount || $user->balanceInt == $request->amount) {
            $created = WithdrawRequest::create([
                'user_id' => $user->id,
                'amount' => $request->amount,
                'account_holder' => $request->account_holder,
                'account_number' => $request->account_number,
                'bank' => $request->bank,
                'additional_note' => $request->additional_note,
                'status' => WithdrawRequest::$Pending

            ]);
            request()->session()->flash('alert', [
                'type' => 'info',
                'message' => 'Withdraw request has been submitted',
            ]);
            return redirect()->back();
        } else {
            request()->session()->flash('alert', [
                'type' => 'error',
                'message' => 'Withdraw amount cannot be greater than Current Balance',
            ]);
            return redirect()->back();
        }
    }
    public function payThroughUserWallet($amount)
    {
        $user = Auth::user();
        if ($user->balanceInt > 0 && $user->balanceInt > $amount || $user->balanceInt == $amount) {
            $meta = ['details' => 'Appointment Booked through Wallet'];
            $transaction = $user->withdraw($amount, $meta);
            $obj = ["status" => true, "msg" => "Successfully withdraw from Wallet"];
        } else {

            $obj = ["status" => false, "msg" => "Insufficient Funds in your Wallet"];
        }
        return response()->json($obj);
    }
}

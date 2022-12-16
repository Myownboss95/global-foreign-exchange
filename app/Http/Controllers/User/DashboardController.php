<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Trade;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        //return main account balance
        $user = User::findOrFail(auth()->user()->id);
        $userMainBalance = $user->accountBalance();
        //return referral account balance
        $userRefBalance = $user->accountBalance('referral');
        //return referral account balance
        $userInvestedBalance = $user->accountBalance('invested');

        //return withdrawals
        $withdrawals = $user->transactions()->where('type', 'withdrawal')->limit(5)->get();
        $num_withdrawals = $user->transactions()->where('type', 'withdrawal')->count();
       //return deposits
        $deposits = $user->transactions()->where('type', 'deposit')->limit(5)->get();
        $num_deposits = $user->transactions()->where('type', 'deposit')->count();
        
        $activeSubscription = $user->subscriptions()->with('plan')->limit(5)->get();
        $numActiveSubscription =  $user->subscriptions()->count();
        $trade_profits = $user->trades()->where('status', 'active')->sum('returns');
        // dd($activeSubscription);
        

        return inertia('user.index', [
            'userMainBalance' => $userMainBalance,
            'userRefBalance' => $userRefBalance,
            'userInvestedBalance' => $userInvestedBalance,
            'withdrawals' => $withdrawals,
            'withdrawals_count' => $num_withdrawals,
            'deposits' => $deposits,
            'deposits_count' => $num_deposits,
            'trade_profits' => $trade_profits,
            'activeSubscription' => $activeSubscription,
            'activeSubscription_count' => $numActiveSubscription
        ]);
    }
}

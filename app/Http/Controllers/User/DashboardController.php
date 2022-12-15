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
        $withdrawals = $user->transactions()->where('type', 'withdrawal')->limit(6)->get();
        $num_withdrawals = $user->transactions()->where('type', 'withdrawal')->count();
       //return deposits
        $deposits = $user->transactions()->where('type', 'deposit')->limit(6)->get();
        $num_deposits = $user->transactions()->where('type', 'deposit')->count();
        //return buy trades
        $buyTrades = $user->transactions()->where('type', 'buy')->limit(6)->get();
        $num_buyTrades = $user->transactions()->where('type', 'buy')->count();
        //return sell trades
        $sellTrades = $user->transactions()->where('type', 'sell')->limit(6)->get();
        $num_sellTrades = $user->transactions()->where('type', 'buy')->count();
        $activeSubscription = $user->subscriptions();
        // dd($activeSubscription);
        // foreach($activeSubscription as $subs){
        //      print_r($subs->user_id);
        // };

        $trade_profits = $user->trades()->where('status', 'active')->sum('returns');


        return inertia('user.index', [
            'userMainBalance' => $userMainBalance,
            'userRefBalance' => $userRefBalance,
            'userInvestedBalance' => $userInvestedBalance,
            'withdrawals' => $withdrawals,
            'withdrawals_count' => $num_withdrawals,
            'deposits' => $deposits,
            'deposits_count' => $num_deposits,
            'buyTrades' => $buyTrades,
            'num_buyTrades' => $num_buyTrades,
            'sellTrades' => $sellTrades,
            'num_sellTrades' => $num_sellTrades,
            'trade_profits' => $trade_profits,
            'active_trades' => $user->trades()->where('status', 'active')->count()
        ]);
    }
}

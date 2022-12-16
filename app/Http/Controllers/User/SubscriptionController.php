<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function plans()
    {
        $plans = Plan::oldest()->with('features')->get();
        return inertia('user.subscriptions.subscriptions', [
            'plans' => $plans
        ]);
    }

    public function subscribe(Plan $plan)
    {
        $user = User::findOrFail(auth()->user()->id);
        $account = $user->accounts()->where('type', 'main')->first();
        $investedAccount = $user->accounts()->where('type', 'invested')->first();
        $amount = $account?->account ?? 0;

        if ($amount >= $plan->min_investment) {
            // $account->account -= $plan->max_investment;
            // $investedAccount->account += $plan->max_investment;
            session()->flash('success', 'Please enter amount');
            // return redirect()->route('user.subscribe.pay');
        } 
        else {
            session()->flash('error', 'You do not have enough balance to subscribe to this plan. Make a deposit');
            return redirect()->route('user.deposits.create');
        }

        $user->subscriptions()->create([
            'plan_id' => $plan->id,
            'status' => 'active',
            'expires_at' => Carbon::now()->addDays("$plan->tenure")->toDateTimeString(),
        ]);

        // $account->save();
        // $investedAccount->save();
        session()->flash('success', 'Subscribed successfully');
        return redirect()->route('user.index');


    }

    public function choosePlans($slug){
        $plan = Plan::where('slug', $slug)->first();
        return inertia('user.subscriptions.create', [
            'plan' => $plan
        ]);
    }
    public function active_subscriptions(){
        $user = User::findOrFail(auth()->user()->id);
        $activeSubscription = $user->subscriptions()->with('plan')->paginate(6);
        return inertia('user.subscriptions.index', [
            'activeSubscription' => $activeSubscription
        ]);
    }

    public function subscribeStore(Request $request, $id){
        $plan = Plan::findOrFail($id);
        // , `min:$plan->min_investment`, `max:$plan->min_investment`
        $valid = $request->validate([
            'amount'=>['required', 'numeric']
        ]);
        $amount = $request->input('amount');
        $user = User::findOrFail(auth()->user()->id);
        $account = $user->accounts()->where('type', 'main')->first();
        $investedAccount = $user->accounts()->where('type', 'invested')->first();
        if ($amount >= $plan->min_investment && $amount <= $plan->max_investment) {
            $account->account -= $amount;
            $investedAccount->account += $amount;
            $account->save();
            $investedAccount->save();
            $user->subscriptions()->create([
                'plan_id' => $plan->id,
                'amount' => $amount,
                'status' => 'active',
                'expires_at' => Carbon::now()->addDays("$plan->tenure")->toDateTimeString(),
            ]);
          

            $user->subscriptions()->create([
                'plan_id' => $plan->id,
                'amount' => $amount,
                'status' => 'active',
                'expires_at' => Carbon::now()->addDays("$plan->tenure")->toDateTimeString()

            ]);

            
            session()->flash('success', 'Subscribed Successfully');

            return redirect()->route('user.index');
        } 
        else {
            session()->flash('error', 'You do not have enough balance to subscribe to this plan. Make a deposit');
            return redirect()->route('user.deposits.create');
        }
     }
}

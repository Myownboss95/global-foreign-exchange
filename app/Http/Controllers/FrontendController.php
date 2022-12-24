<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public $theme;
    public function __construct()
    {
        $this->theme = config('app.theme', 'front2');
    }
    public function home()
    {
        $setting = Settings::first();
        $plans = Plan::oldest()->with('features')->get();
        $popularplans= Plan::where('name', 'Premium')->orWhere('name', 'Silver')->with('features')->get();
        return view("$this->theme.home", compact('setting','plans', 'popularplans'));
    }

    public function about()
    {
        return view("$this->theme.about-us");
    }


    public function contact()
    {
        return view("$this->theme.contact");
    }

    public function terms_and_conditions()
    {
        return view("$this->theme.terms-and-conditions");
    }

    public function faqs()
    {
        return view("$this->theme.faqs");
    }
    public function calculateRoi(Request $request){
        $input = Validator::make($request->all(), [
            'amount' => 'required',
            'plan_id' => 'required|exists:plans,id',
        ]);
        if($input->fails()){
            return response()->json([
                'errors' => $input->errors()
            ], 500);
        }

        $amount= $request->input('amount');
        $plan_id= $request->input('plan_id');
        $plan = Plan::find($plan_id);
        if ($amount < $plan->min_investment || $amount  > $plan->max_investment) {
            $error = 'Enter amount between $'. $plan->min_investment. ' - $'.$plan->max_investment. ' for this plan';
            return response()->json($error, 500);
        }
        $roi = (($plan->bonus/100) * $amount)+ $amount;
        return response()->json([
            'roi' => $roi,
            'plan_tenure' =>$plan->tenure,
            
        ], 200);
    }
}

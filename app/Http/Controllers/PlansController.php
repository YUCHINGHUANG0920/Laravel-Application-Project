<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;

class PlansController extends Controller
{
    // only authenticated users can access these methods
    public function __construct()
    {
        $this->middleware('auth');
    }

    // show all plans
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    // buy the plan
    public function buy($id)
    {
        $plan = Plan::findOrFail($id);

        $user = Auth::user();
        $user->plan_id = $plan->id;
        $user->save();

        return back()->with('success', 'Plan updated!');
    }
}

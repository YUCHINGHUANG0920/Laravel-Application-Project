<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use Illuminate\Support\Facades\Auth;

class DomainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Store domain
    public function store(Request $request)
    {
        $request->validate([
            'domain' => 'required|string',
        ]);

        $domain = $request->input('domain');

        // clean http:// or https://
        $domain = preg_replace('#^https?://#', '', $domain);
        // clean www.
        $domain = preg_replace('#^www\.#', '', $domain);
        // only keep domain
        $domain = explode('/', $domain)[0];

        // check if domain already exists
        if (\App\Models\Domain::where('domain', $domain)->exists()) {
            return back()->with('error', 'Domain already exists!');
        }

        // store it into DB
        \App\Models\Domain::create([
            'user_id' => \Illuminate\Support\Facades\Auth::id(),
            'domain' => $domain,
        ]);


        return back()->with('success', 'Domain added!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::user() || Auth::user()->is_admin != 1) {
                return redirect('/dashboard');
            }
            return $next($request);
        });
    }

    public function index()
    {
        // get all users ; sorted by created_at DESC
        $users = User::with('domains')->orderBy('created_at', 'desc')->get();
        return view('users.index', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ConfirmsPasswords;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('login');
    }
    public function log(Request $request) {
        $credentials = $request->validate([
            'u' => ['required'],
            'p' => ['required'],
        ]);
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'error' => 'Username hoặc Password không đúng',
            ]);
        }
        $request->session()->regenerate();
        return redirect()->route('welcome');
    }
}

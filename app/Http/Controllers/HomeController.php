<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
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
    public function index()
    {
        return view('home');
    }

    public function orders()
    {
        return view('dashboard.orders');
    }

    public function subscriptions()
    {
        return view('dashboard.subscriptions');
    }

    public function workers()
    {
        $allusers = User::all();
        return view('dashboard.workers', compact('allusers'));
    }

    public function docs()
    {
        return view('dashboard.docs');
    }

    public function alerts()
    {
        return view('dashboard.alerts');
    }
}

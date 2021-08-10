<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $redirectTo ='';

        switch(auth()->user()->role){
            case 1: $redirectTo ='admin.dashboard';break;
            case 2: $redirectTo ='user.dashboard';break;
        }

        if ($redirectTo != '') {
            return redirect(route($redirectTo));
        }

        return view('home');
    }
}

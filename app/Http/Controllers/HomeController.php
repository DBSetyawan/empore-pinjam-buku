<?php

namespace App\Http\Controllers;

use App\User;
use datatables;
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
        return view('home');
    }

    public function userlist(User $user){
        $users = $user->all();
        return datatables()->of($users)
            ->make(true);
    }

    public function viewYajraUsers(User $user){
        return view('yajra.users');

    }
}

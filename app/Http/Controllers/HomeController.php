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

    public function userlist(Request $request, User $user){
        if ($request->ajax()) {
            $data = User::latest()->get();
            return datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                        //    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">"'.$row->id.'"View</a>';
     
                        //     return $btn;
                        $button = '<button type="button" name="edit" id="'.$row->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$row->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
    }

    public function viewYajraUsers(User $user){
        return view('yajra.users');

    }
}

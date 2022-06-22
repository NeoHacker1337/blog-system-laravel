<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\User;
use App\Models\Kiosk;
use Illuminate\Support\Str;
use DB;
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
//user login
      $user = auth()->user()->id;
      $users = User::findOrFail($user);
     return view('user.index',compact('users'));
    }



}

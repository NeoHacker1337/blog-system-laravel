<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class ProfileController extends Controller
{

  public function profileview()
  {
    $user = auth()->user()->id;
    $users = User::findOrFail($user);
    return view('admin.profile',compact('users'));
  }
 
}

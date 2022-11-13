<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.dashboard');
    }
    public function adminUsers(){
        dd('Under Work! Be patient please...');
        $users=User::all();
        return view('admin.adminUsers.usersList',['users'=>$users]);
    }
}

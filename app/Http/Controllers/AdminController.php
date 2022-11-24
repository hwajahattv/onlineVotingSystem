<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function adminUsers()
    {
//        dd('Under Work! Be patient please...');
        $users = DB::table('users')
            ->select('users.id', 'users.name', 'users.email', 'users.created_at', 'users.roles', 'active_users.id as onlineCheck', 'active_users.created_at as loginTime')
            ->leftJoin('active_users', 'active_users.user_id', '=', 'users.id')
            ->get();
//        dd($users);
//
//        $users=User::all();
        return view('admin.adminUsers.usersList', ['users' => $users]);
    }

    public function addNewUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        $message = 'User registered successfully!';
//        dd($message);
        return redirect()->route('adminUsers')->with(['message' => $message]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        $message = 'User deleted successfully!';
//        dd($message);
        return redirect()->back()->with(['dltMessage' => $message]);
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function userRoleUpdate(Request $request)
    {
//        dd($request);
        User::where(['id' => $request['userIDHolder']])->update(['roles' => $request['role']]);
        $message = 'User role updated successfully!';
//        dd($message);
        return redirect()->back()->with(['message' => $message]);

//        dd('userRoleUpdate method called!');
    }
}

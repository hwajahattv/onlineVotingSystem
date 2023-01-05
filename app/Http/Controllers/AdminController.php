<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPHtmlParser\Dom;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $provinces= DB::table('provinces')->select('name')->get();
        return view('admin.dashboard',['provinces'=>$provinces]);
    }
    public function maritalStatusCount($type)
    {
    //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if($type=='overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('maritalStatus', DB::raw('count(*) as total'))
                ->groupBy('maritalStatus')
                ->pluck('total', 'maritalStatus');
        }else{
            $maritalStatusOverall = DB::table('voters')
                ->select('maritalStatus', DB::raw('count(*) as total'))
                ->where('current_province','=',$replaced)
                ->groupBy('maritalStatus')
                ->pluck('total', 'maritalStatus');
        }
        return response($maritalStatusOverall);
    }
    public function occupationCount($type)
    {
    //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if($type=='overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->groupBy('occupation')
                ->pluck('total', 'occupation');
        }else{
            $maritalStatusOverall = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->where('current_province','=',$replaced)
                ->groupBy('occupation')
                ->pluck('total', 'occupation');
        }
        return response($maritalStatusOverall);
    }
    public function disabilityCount($type)
    {
    //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if($type=='overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('disabilityType', DB::raw('count(*) as total'))
                ->groupBy('disabilityType')
                ->pluck('total', 'disabilityType');
        }else{
            $maritalStatusOverall = DB::table('voters')
                ->select('disabilityType', DB::raw('count(*) as total'))
                ->where('current_province','=',$replaced)
                ->groupBy('disabilityType')
                ->pluck('total', 'disabilityType');
        }
        return response($maritalStatusOverall);
    }
    public function religionCount($type)
    {
    //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if($type=='overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('religion', DB::raw('count(*) as total'))
                ->groupBy('religion')
                ->pluck('total', 'religion');
        }else{
            $maritalStatusOverall = DB::table('voters')
                ->select('religion', DB::raw('count(*) as total'))
                ->where('current_province','=',$replaced)
                ->groupBy('religion')
                ->pluck('total', 'religion');
        }
        return response($maritalStatusOverall);
    }
    public function selfEmployed($type)
    {
        $replaced = str_replace('-', '', $type);
        if($type=='overall') {
            $registered = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->where('occupation','=','Self employed')
                ->where('IPA_Registered','=',1)
                ->where('IRC_Registered','=',1)
                ->groupBy('occupation')
                ->pluck('total', 'occupation');
            $notRegistered = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->where('occupation','=','Self employed')
                ->orWhere('IPA_Registered','=',0)
                ->orWhere('IRC_Registered','=',0)
                ->groupBy('occupation')
                ->pluck('total', 'occupation');

        }else{
            $maritalStatusOverall = DB::table('voters')
                ->select('religion', DB::raw('count(*) as total'))
                ->where('current_province','=',$replaced)
                ->groupBy('religion')
                ->pluck('total', 'religion');
        }
        return response($maritalStatusOverall);
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
        User::where(['id' => $request['userIDHolder']])->update(['roles' => $request['role']]);
        $message = 'User role updated successfully!';
        return redirect()->back()->with(['message' => $message]);
    }
    public function scheduleTest()
    {
        dd('schedule task running');
    }

}

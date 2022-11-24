<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
//        dd($request);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            date_default_timezone_set( 'Asia/Karachi');
            DB::table('active_users')->insert(array('user_id' =>   Auth::id(),"created_at" => date('Y-m-d H:i:s')));
            return redirect()->intended('home');
        }
    }

    public function logout()
    {
        DB::table('active_users')->where(['user_id'=> Auth::id()])->delete();
        Auth::logout();
//        dd('test');
        return redirect('/');
    }
}

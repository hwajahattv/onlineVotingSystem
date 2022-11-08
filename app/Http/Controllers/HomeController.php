<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use Illuminate\Http\Request;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('admin.dashboard');
    // }
    public function registerAsVoter()
    {
        return view('registerAsVoter');
    }
    public function registerAsVoterPost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'CNIC' => 'required|max:13|unique:voters,CNIC',
            'phone_no' => 'required|max:11',
            'email' => 'required|email|unique:voters,email',
            'profilePicture' =>
            'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        //model call

        $voter = new Voter;

        $voter->name = $data["name"];
        $voter->CNIC = $data["CNIC"];
        $voter->phone_no = $data["phone_no"];
        $voter->email = $data["email"];
        $voter->address = $data["address"];
        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/voter/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            $voter->displayPicture = $filename;
        }

        $voter->save();
        return redirect()->back()->with(['message', 'Message sent!']);
    }
    public function voterLookUp()
    {
        return view('voterLookUp');
    }
    public function pollingSchedule()
    {
        return view('electionSchedule');
    }
    public function faq()
    {
        return view('faq');
    }
    public function electionVideoPage()
    {
        return view('electionVideoPage');
    }
    public function contact()
    {
        return view('contact');
    }
    public function allRegionOffices()
    {
        return view('allRegionOffices');
    }
}

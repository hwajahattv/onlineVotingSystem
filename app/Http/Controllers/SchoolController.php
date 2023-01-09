<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function schoolSection()
    {
        $count = DB::table('schools')->count();
        return view('admin.schoolSection.schoolSectionHome', ['schoolCount' => $count]);
    }

    public function index()
    {
        $provinces = DB::table('provinces')->get();
        return view('admin.schoolSection.showSchools', ['provinces' => $provinces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = DB::table('provinces')->get();
        return view('admin.schoolSection.addSchool', ['provinces' => $provinces]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'province' => 'required|max:3',
            'education_level' => 'required|max:2',
        ]);
        $data = $request->all();
        $status = DB::table('schools')->insert([
            'name' => $data['name'],
            'education_level_id' => $data['education_level'],
            'province_id' => $data['province']
        ]);
        if ($status) {
            $message = 'School added successfully!';
        } else {
            $message = 'Error! School not added.';
        }
        return redirect()->back()->with(['message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = DB::table('schools')
            ->select('schools.id', 'schools.name as schoolName','p.id as ProvinceID', 'p.name as Province', 'el.name as Level', 'el.id as LevelID')
            ->leftJoin('education_levels as el', 'schools.education_level_id', '=', 'el.id')
            ->leftJoin('provinces as p', 'schools.province_id', '=', 'p.id')
            ->where('schools.id',$id)->get();
        $provinces = DB::table('provinces')->get();
//        dd($school,$provinces);
        return view('admin.schoolSection.editSchool', ['school' => $school,'provinces'=>$provinces]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:25',
            'province' => 'required|max:3',
            'education_level' => 'required|max:2',
        ]);
        $data = $request->all();
        $status = DB::table('schools')->where('id',$id)->update([
            'name' => $data['name'],
            'education_level_id' => $data['education_level'],
            'province_id' => $data['province']
        ]);
        if ($status) {
            $message = 'School updated successfully!';
        } else {
            $message = 'Error! School not updated.';
        }
        return redirect()->route('schoolSection')->with(['message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = DB::table('schools')->where('id',$id)->delete();
        if ($status) {
            $message = 'School deleted successfully!';
        } else {
            $message = 'Error! School not deleted.';
        }
        return redirect()->back()->with(['message' => $message]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class VoterController extends Controller
{
    //
    public function voterSection()
    {
        $voterCount = count(Voter::all());
        return view('admin.voterSection.voterSectionHome', ['voterCount' => $voterCount]);
    }

    public function addVoter()
    {
        $publicDepartments = DB::table('public_departments')->get();
        $provinces = DB::table('provinces')->get();
        return view('admin.voterSection.addVoter', ['publicDepartments' => $publicDepartments,'provinces'=>$provinces]);
    }

    public function addVoterPost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
//            'surName' => 'required|max:25',
            'gender' => 'required',
            'fatherName' => 'required',
            'motherName' => 'required',
            'marital_status' => 'required',
            'spouseName' => 'required_if:marital_status,Defacto,Married,Divorced,Widowed',
            'registration_type' => 'required',
            'birth_type' => 'required',
            'disability' => 'required',
            'mobile_number' => 'required',
            'dob' => 'required|date',
            'occupation' => 'required',
            'school' => 'required_if:occupation, School',
            'education_level' => 'required_if:occupation, School',
            'graduation_year' => 'required_if:occupation, School',
            'business_title' => 'required_if:occupation, Self employed',
            'IPA_certificate' => 'required_if:occupation, Self employed',
            'IRC_certificate' => 'required_if:occupation, Self employed',
            'public_department' => 'required_if:occupation, Public Servant',
            'payroll_number' => 'required_if:occupation, Public Servant',
            'religion' => 'required',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'current_region' => 'required',
            'current_province' => 'required',
            'profilePicture' =>
                'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        if ($data['occupation'] == "School") {
            $school = $data["school"];
            $schoolLevel = $data["education_level"];
            $graduationYear = $data["graduation_year"];
        } else {
            $school = '';
            $schoolLevel = '';
            $graduationYear = '';
        }
        if ($data['occupation'] == "Self employed") {
            $businessTitle = $data["business_title"];
            $IPA_Registered = $data["IPA_certificate"];
            $IRC_Registered = $data["IRC_certificate"];
        } else {
            $businessTitle = '';
            $IPA_Registered = '';
            $IRC_Registered = '';
        }
        if ($data['occupation'] == "Public Servant") {
            $departmentName = $data["public_department"];
            $payrollNumber = $data["payroll_number"];
        } else {
            $departmentName = '';
            $payrollNumber = '';
        }
        if ($data["religion"] == "others") {
            $otherReligion = $data["otherReligion"];
        } else {
            $otherReligion = '';
        }
        if ($data["disability"] == 1) {
            $disabilityType = $data["disability_type"];
        } else {
            $disabilityType = '';
        }

        //check if user already created due to spouse of child user
        $voterExists = Voter::where(['name' => $data['name']])->first();

        if ($voterExists == null) {
//            new voter is created
            //model call

            $voter = new Voter;

            $voter->name = $data["name"];
//            $voter->surName = $data["surName"];
            $voter->maritalStatus = $data["marital_status"];
            $voter->registeredAs = $data["registration_type"];
            $voter->birthType = $data["birth_type"];
            $voter->dob = $data["dob"];
            $voter->gender = $data["gender"];
            $voter->occupation = $data["occupation"];
            $voter->school = $school;
            $voter->schoolLevel = $schoolLevel;
            $voter->graduationYear = $graduationYear;
            $voter->businessTitle = $businessTitle;
            $voter->IPA_Registered = $IPA_Registered;
            $voter->IRC_Registered = $IRC_Registered;
            $voter->departmentName = $departmentName;
            $voter->payrollNumber = $payrollNumber;
            $voter->religion = $data["religion"];
            $voter->otherReligion = $otherReligion;
            $voter->disability = $data["disability"];
            $voter->disabilityType = $disabilityType;
            $voter->phone_no = $data["mobile_number"];
            $voter->local_church = $data["local_church"];
            $voter->birth_region = $data["birth_region"];
            $voter->birth_province = $data["birth_province"];
            $voter->birth_district = $data["birth_district"];
            $voter->birth_LLG = $data["birth_LLG"];
            $voter->birth_ward = $data["birth_ward"];
            $voter->birth_village = $data["birth_village"];
            $voter->current_region = $data["current_region"];
            $voter->current_province = $data["current_province"];
            $voter->current_district = $data["current_district"];
            $voter->current_LLG = $data["current_LLG"];
            $voter->current_ward = $data["current_ward"];
            $voter->current_village = $data["current_village"];
            // create parent voters
            //check if father is registered
            $father=DB::table('voters')->where(['name'=>$data['fatherName']])->first();
            if(!$father) {
                $father_voter_id = DB::table('voters')->insertGetId(['name' => $data['fatherName']]);
                $voter->father_id = $father_voter_id;
            }else{
                $father_voter_id = $father->id;
                $voter->father_id = $father->id;
            }
            //check if mother is registered
            $mother=DB::table('voters')->where(['name'=>$data['motherName']])->first();
            if(!$mother) {
                $mother_voter_id = DB::table('voters')->insertGetId(['name' => $data['motherName']]);
                $voter->mother_id = $mother_voter_id;
            }else{
                $mother_voter_id = $mother->id;
                $voter->mother_id = $mother->id;
            }
            //update the parents data in their spouse columns
            Voter::where(['id'=>$father_voter_id])->update(['spouse_id'=>$mother_voter_id]);
            Voter::where(['id'=>$mother_voter_id])->update(['spouse_id'=>$father_voter_id]);
            //if marital status is Defacto/Married/Divorced/Widowed then spouse voter will be created.
            if ($data['marital_status'] == 'Defacto' || $data['marital_status'] == 'Married' || $data['marital_status'] == 'Divorced' || $data['marital_status'] == 'Widowed') {
                //check if spouse is already registered
                $spouse=DB::table('voters')->where(['name'=>$data['spouseName']])->first();
                if(!$spouse) {
                    $spouse_id = DB::table('voters')->insertGetId(['name' => $data['fatherName']]);
                    $voter->spouse_id = $spouse_id;
                }else{
                    $spouse_id = $spouse->id;
                    $voter->spouse_id = $spouse->id;
                }
            }else{
                $spouse_id = null;
                $voter->spouse_id = null;
            }

            //image validation

            if ($request->hasfile('profilePicture')) {
                $img_tmp = $request->file('profilePicture');

                $extension = $img_tmp->getClientOriginalExtension();

                $filename = uniqid() . '.' . $extension;

                $img_path = 'img/uploads/voter/' . $filename;

                \Intervention\Image\Facades\Image::make($img_tmp)->resize(200, 200)->save($img_path);
                $voter->displayPicture = $filename;
            }
            $voter->save();
            Voter::where(['id'=>$spouse_id])->update(['spouse_id'=>$voter->id]);
        } else {
            if ($voterExists->father_id) {
                $father_id = $voterExists->father_id;
            } else {
                $father_id = DB::table('voters')->insertGetId(['name' => $data['fatherName']]);
            }
            if ($voterExists->mother_id) {
                $mother_id = $voterExists->mother_id;
            } else {
                $mother_id = DB::table('voters')->insertGetId(['name' => $data['motherName']]);
            }
            if ($voterExists->spouse_id) {
                $spouse_id = $voterExists->spouse_id;
            } else {
                if ($data['marital_status'] == 'Defacto' || $data['marital_status'] == 'Married' || $data['marital_status'] == 'Divorced' || $data['marital_status'] == 'Widowed') {
                    $spouse_id = DB::table('voters')->insertGetId(['name' => $data['spouseName']]);
                } else {
                    $spouse_id = null;
                }
            }
//            dd($father_id,$mother_id,$spouse_id);
            $status = Voter::where(['id' => $voterExists->id])->update([
                'name' => $data["name"],
//                'surName' => $data["surName"],
                'maritalStatus' => $data["marital_status"],
                'registeredAs' => $data["registration_type"],
                'birthType' => $data["birth_type"],
                'dob' => $data["dob"],
                'gender' => $data["gender"],
                'occupation' => $data["occupation"],
                'school' => $school,
                'schoolLevel' => $schoolLevel,
                'graduationYear' => $graduationYear,
                'businessTitle' => $businessTitle,
                'IPA_Registered' => $IPA_Registered,
                'IRC_Registered' => $IRC_Registered,
                'departmentName' => $departmentName,
                'payrollNumber' => $payrollNumber,
                'religion' => $data["religion"],
                'otherReligion' => $otherReligion,
                'disability' => $data["disability"],
                'disabilityType' => $disabilityType,
                'phone_no' => $data["mobile_number"],
                'local_church' => $data["local_church"],
                'birth_region' => $data["birth_region"],
                'birth_province' => $data["birth_province"],
                'birth_district' => $data["birth_district"],
                'birth_LLG' => $data["birth_LLG"],
                'birth_ward' => $data["birth_ward"],
                'birth_village' => $data["birth_village"],
                'current_region' => $data["current_region"],
                'current_province' => $data["current_province"],
                'current_district' => $data["current_district"],
                'current_LLG' => $data["current_LLG"],
                'current_ward' => $data["current_ward"],
                'current_village' => $data["current_village"],
                'father_id' => $father_id,
                'mother_id' => $mother_id,
                'spouse_id' => $spouse_id
            ]);

        }



        $message = 'Voter registered successfully!';
//        dd($message);
        return redirect()->back()->with(['message' => $message]);
    }

    public function showVoters()
    {
        $allVoters = Voter::all();
        return view('admin.voterSection.showVoters', ['voters' => $allVoters]);
    }

    public function showVoterDetails($id)
    {
        $voterDetails = Voter::find($id);
        return \response()->json($voterDetails);
    }

    public function editVoter($id)
    {
        $voter = Voter::where(['id' => $id])->first();
        return view('admin.voterSection.editVoter', ['voter' => $voter]);
    }

    public function editVoterPost(Request $request, $id)

    {
//         dd($request);
        $thisUserData=Voter::find($id);
        $request->validate([
            'name' => 'required|max:25',
            'middleName' => 'required|max:25',
            'surName' => 'required|max:25',
            'age' => 'integer',
            'gender' => 'required',
            'dob' => 'required|date',
            'occupation' => 'required',
            'religion' => 'required',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'birth_district' => 'required',
            'birth_LLG' => 'required',
            'birth_ward' => 'required',
            'birth_village' => 'required',
            'current_region' => 'required',
            'current_province' => 'required',
            'current_district' => 'required',
            'current_LLG' => 'required',
            'current_ward' => 'required',
            'current_village' => 'required'
        ]);
        $data = $request->all();
        if(!array_key_exists("otherReligon",$data)){
            $data['otherReligon']=$thisUserData->otherReligion;
        }
        if(!array_key_exists("school",$data)){
            $data['school']=$thisUserData->school;
        }


        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/voter/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            $isProfPicUpdated=Voter::where(['id'=>$id])->update(['displayPicture'=>$filename]);
        }
        $isUpdated = Voter::where(['id' => $id])->update([
            'name' => $data['name'],
            'middleName' => $data['middleName'],
            'surName' => $data['surName'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'occupation' => $data['occupation'],
            'school' => $data['occupation'],
            'religion' => $data['occupation'],
            'otherReligion' => $data['occupation'],
            'local_church' => $data['local_church'],
            'birth_region' => $data['birth_region'],
            'birth_province' => $data['birth_province'],
            'birth_district' => $data['birth_district'],
            'birth_LLG' => $data['birth_LLG'],
            'birth_ward' => $data['birth_ward'],
            'birth_village' => $data['birth_village'],
            'current_region' => $data['current_region'],
            'current_province' => $data['current_province'],
            'current_district' => $data['current_district'],
            'current_LLG' => $data['current_LLG'],
            'current_ward' => $data['current_ward'],
            'current_village' => $data['current_village']]);

        // Session::flash('message', 'Task successfully added!');
        $message = 'Voter data updated successfully!';
//        dd($message);
        return redirect(route('voterSection'))->with(['message' => $message]);
    }

    public function deleteVoter($id)
    {
        $voter = Voter::find($id);
        $voter->delete();
        $message = 'Voter deleted successfully!';
//        dd($message);
        return redirect()->back()->with(['dltMessage' => $message]);
    }
}

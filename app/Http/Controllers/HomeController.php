<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\District;
use App\Models\Election;
use App\Models\LLG;
use App\Models\PoliticalParty;
use App\Models\Province;
use App\Models\Vote;
use App\Models\Voter;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
        $publicDepartments = DB::table('public_departments')->get();
        $provinces = DB::table('provinces')->get();
        return view('registerAsVoter', ['publicDepartments' => $publicDepartments,'provinces'=>$provinces]);
    }

    public function registerAsCandidate()
    {
        $politicalPartyList = PoliticalParty::all();
        return view('registerAsCandidate', ['politicalPartyList' => $politicalPartyList]);
    }

    public function registerAsVoterPost(Request $request)
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

                Image::make($img_tmp)->resize(200, 200)->save($img_path);
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

        $voterID = Voter::where(['name' => $data['name']])->first();
        $message = 'You are registered successfully! Please note your Voter ID: ' . $voterID->id;
//        dd($message);
        return redirect()->back()->with(['message' => $message]);
    }

    public function registerAsCandidatePost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'surName' => 'required|max:25',
            'age' => 'integer',
            'gender' => 'required',
            'dob' => 'required|date',
            'occupation' => 'required',
            'religion' => 'required',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'current_region' => 'required',
            'current_province' => 'required',
            'policeClearanceCertificate' => 'required',
            'political_party' => 'required',
            'profilePicture' =>
                'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        //model call

        $cand = new Candidate;

        $cand->name = $data["name"];
        $cand->middleName = $data["middleName"];
        $cand->surName = $data["surName"];
        $cand->dob = $data["dob"];
        $cand->age = $data["age"];
        $cand->gender = $data["gender"];
        $cand->occupation = $data["occupation"];
        if ($data['occupation'] == "School") {
            $cand->school = $data["school"];
        }
        $cand->religion = $data["religion"];
        if ($data["religion"] == "others") {
            $cand->otherReligion = $data["otherReligion"];
        }
        $cand->local_church = $data["local_church"];
        $cand->birth_region = $data["birth_region"];
        $cand->birth_province = $data["birth_province"];
        $cand->birth_district = $data["birth_district"];
        $cand->birth_LLG = $data["birth_LLG"];
        $cand->birth_ward = $data["birth_ward"];
        $cand->birth_village = $data["birth_village"];
        $cand->current_region = $data["current_region"];
        $cand->current_province = $data["current_province"];
        $cand->current_district = $data["current_district"];
        $cand->current_LLG = $data["current_LLG"];
        $cand->current_ward = $data["current_ward"];
        $cand->current_village = $data["current_village"];
        $cand->political_party_id = $data["political_party"];
        $cand->policeClearanceCertificate = $data["policeClearanceCertificate"];


        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/candidate/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            $cand->displayPicture = $filename;
        }

        $cand->save();
        $message = 'Candidate registered successfully!';
//        dd($message);
        return redirect()->back()->with(['message' => $message]);
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

    public function findMe(Request $request)
    {
//    dd($request);
        $request->validate([
            'name' => 'required|max:25',
            'surName' => 'required|max:25',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'birth_district' => 'required',
//            'birth_LLG' => 'required',
//            'birth_ward' => 'required',
        ]);

        $requiredVoter = Voter::where(['name' => $request['name']])->where(['surName' => $request['surName']])->first();
        if ($requiredVoter != null) {
            return response()->json($requiredVoter);
        }
//        dd('ttt');
        return response("null");
    }

    public function castVote($id)
    {
        $voter = Voter::find($id);
        if ($voter == null) {
            $message = 'Voter ID not Found! Find your Voter ID or get registered as voter first.';
//        dd($message);
            return view('voterIdNotFound', ['message' => $message]);
        } else {
//        dd($voter);
//        $allCandidates=Candidate::all();
//            $object = $this->verifyMapping($voter);
            $region = $voter->current_region;
            $province = $voter->current_province;
            $district = $voter->current_district;
            $LLG = $voter->current_LLG;
            $ward = $voter->current_ward;
            $election = Election::all();
            $candidates = Candidate::where(['current_region' => $region])->where(['current_province' => $province])->where(['current_district' => $district])->where(['current_LLG' => $LLG])->where(['current_ward' => $ward])->with('politicalParty')->get();
//    dd($candidates,$allCandidates, $voter,$region, $province, $district, $LLG, $ward);
//dd($object);
            return view('castVote', ['elections' => $election, 'candidates' => $candidates, 'voter' => $voter]);
        }
    }

    public function castVotePost(Request $request, $id)
    {
//        dd($request);
        $vote = new Vote;
        $vote->election_id = $request['electionID'];
        $vote->candidate_id = $request['candidateID'];
        $vote->voter_id = $request['voterID'];
        $vote->save();
        return redirect('/');
    }

    public
    function resultsHome()
    {
        $election = Election::all();
        return view('resultsHome', ['elections' => $election]);
    }

    public
    function fetchResults(Request $request)
    {
//        dd($request);
        if ($request['region'] != null) {
            if ($request['province'] != null) {
                if ($request['district'] != null) {
                    $candidatesData = Candidate::where(['current_region' => $request['region']])
                        ->where(['current_province' => $request['province']])
                        ->where(['current_district' => $request['district']])
                        ->with('politicalParty')
                        ->get()->keyBy('id');

                    $voteCount = DB::table('votes')
                        ->select('candidate_id', DB::raw('Count(*) as c'))
                        ->groupBy('candidate_id')
                        ->whereIn('candidate_id', array_keys($candidatesData->toArray()))
                        ->get()->keyBy('candidate_id');
                }
                // dd($candidatesData, $voteCount);
            }
        }
        $election = Election::find($request['electionID']);
        $votesAreaWise = [];
        $votersInDistrict = DB::table('voters')->where('current_district', '<=', $request['district'])->count();
        $votersInProvince = DB::table('voters')->where('current_province', '<=', $request['province'])->count();
        $votersInRegion = DB::table('voters')->where('current_region', '<=', $request['region'])->count();
        $votesAreaWise['votersInDistrict'] = $votersInDistrict;
        $votesAreaWise['votersInProvince'] = $votersInProvince;
        $votesAreaWise['votersInRegion'] = $votersInRegion;
//                dd($votesAreaWise,$voteCount, $candidatesData);
        return view('pollingResultsPage', ['votesAreaWise' => $votesAreaWise, 'voteCount' => $voteCount->toArray(), 'candidates' => $candidatesData, 'election' => $election]);
    }

    public function addDistrict(Request $request)
    {
        $district = new District();
        $district->province_id = $request['province_id'];
        $district->name = $request['name'];
        $district->save();
        $response = array(
            'status' => 'success',
            'msg' => $request['name'] . ' district created successfully',
        );
        return response()->json($response);

    }

    public function addLLG(Request $request)
    {
        $LLG = new LLG();
        $LLG->district_id = $request['district_id'];
        $LLG->name = $request['name'];
        $LLG->save();
        $response = array(
            'status' => 'success',
            'msg' => $request['name'] . ' LLG created successfully',
        );
        return response()->json($response);

    }

    public function addWard(Request $request)
    {
        $Ward = new Ward();
        $Ward->l_l_g_id = $request['LLG_id'];
        $Ward->name = $request['name'];
        $Ward->save();
        $response = array(
            'status' => 'success',
            'msg' => $request['name'] . ' Ward created successfully',
        );
        return response()->json($response);

    }

    public function getProvinceID(Request $request)
    {
        $id = Province::where(['name' => $request->province])->first();
        if ($id != null) {
            $response = array(
                'status' => 'success',
                'msg' => 'ID found successfully',
                'province_id' => $id->id,
            );
        } else {
            $response = array(
                'status' => 'fail',
                'msg' => 'ID not found',
                'province_id' => null,
            );
        }
        return response()->json($response);
    }

    public function getDistrictID(Request $request)
    {
        $id = District::where(['name' => $request->district])->first();
        if ($id != null) {
            $response = array(
                'status' => 'success',
                'msg' => 'ID found successfully',
                'district_id' => $id->id,
            );
        } else {
            $response = array(
                'status' => 'fail',
                'msg' => 'ID not found',
                'district_id' => null,
            );
        }
        return response()->json($response);
    }

    public function getLLGID(Request $request)
    {
        $id = LLG::where(['name' => $request->LLG])->first();
        if ($id != null) {
            $response = array(
                'status' => 'success',
                'msg' => 'ID found successfully',
                'LLG_id' => $id->id,
            );
        } else {
            $response = array(
                'status' => 'fail',
                'msg' => 'ID not found',
                'LLG_id' => null,
            );
        }
        return response()->json($response);
    }
    public function fetchSchools($province_id,$education_level_id){
        $schools=DB::table('schools')->where(['province_id'=>$province_id,'education_level_id'=>$education_level_id])->get();
        return response($schools);
    }
    private function verifyMapping($person): array
    {


        $region = $person->current_region;
        $province = $person->current_province;
        $district = $person->current_district;
        $LLG = $person->current_LLG;
        $ward = $person->current_ward;
        $election = Election::all();
        $candidates = Candidate::where(['current_region' => $region])
            ->where(['current_province' => $province])
            ->where(['current_district' => $district])
            ->where(['current_LLG' => $LLG])
            ->where(['current_ward' => $ward]
            )->with('politicalParty')->get();
//        $object={
//            'region': $region,
//            'province': $province,
//            'district': $district,
//            'LLG': $LLG,
//            'ward': $ward,
//            'election': $election,
//            'candidates': $candidates,
//        };
        $object = [
            0 => $region,
            1 => $province,
            2 => $district,
            3 => $LLG,
            4 => $ward,
            5 => $election,
            6 => $candidates,
        ];
//        $object=json_encode($region, $province, $district, $LLG, $ward, $election, $candidates);
        return $object;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\District;
use App\Models\Election;
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
        $provinces = DB::table('provinces')->select('name')->get();
        return view('admin.dashboard', ['provinces' => $provinces]);
    }
    public function maritalStatusCount($type)
    {
        //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if ($type == 'overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('maritalStatus', DB::raw('count(*) as total'))
                ->groupBy('maritalStatus')
                ->pluck('total', 'maritalStatus');
        } else {
            $maritalStatusOverall = DB::table('voters')
                ->select('maritalStatus', DB::raw('count(*) as total'))
                ->where('current_province', '=', $replaced)
                ->groupBy('maritalStatus')
                ->pluck('total', 'maritalStatus');
        }
        return response($maritalStatusOverall);
    }
    public function occupationCount($type)
    {
        //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if ($type == 'overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->groupBy('occupation')
                ->pluck('total', 'occupation');
        } else {
            $maritalStatusOverall = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->where('current_province', '=', $replaced)
                ->groupBy('occupation')
                ->pluck('total', 'occupation');
        }
        return response($maritalStatusOverall);
    }
    public function disabilityCount($type)
    {
        //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if ($type == 'overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('disabilityType', DB::raw('count(*) as total'))
                ->groupBy('disabilityType')
                ->pluck('total', 'disabilityType');
        } else {
            $maritalStatusOverall = DB::table('voters')
                ->select('disabilityType', DB::raw('count(*) as total'))
                ->where('current_province', '=', $replaced)
                ->groupBy('disabilityType')
                ->pluck('total', 'disabilityType');
        }
        return response($maritalStatusOverall);
    }
    public function religionCount($type)
    {
        //        $string = $type;
        $replaced = str_replace('-', '', $type);
        if ($type == 'overall') {
            $maritalStatusOverall = DB::table('voters')
                ->select('religion', DB::raw('count(*) as total'))
                ->groupBy('religion')
                ->pluck('total', 'religion');
        } else {
            $maritalStatusOverall = DB::table('voters')
                ->select('religion', DB::raw('count(*) as total'))
                ->where('current_province', '=', $replaced)
                ->groupBy('religion')
                ->pluck('total', 'religion');
        }
        return response($maritalStatusOverall);
    }
    public function selfEmployed($type)
    {
        $replaced = str_replace('-', '', $type);
        if ($type == 'overall') {
            $registered = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->where('occupation', '=', 'Self employed')
                ->where('IPA_Registered', '=', 1)
                ->where('IRC_Registered', '=', 1)
                ->groupBy('occupation')
                ->pluck('total', 'occupation');
            $notRegistered = DB::table('voters')
                ->select('occupation', DB::raw('count(*) as total'))
                ->where('occupation', '=', 'Self employed')
                ->orWhere('IPA_Registered', '=', 0)
                ->orWhere('IRC_Registered', '=', 0)
                ->groupBy('occupation')
                ->pluck('total', 'occupation');
        } else {
            $maritalStatusOverall = DB::table('voters')
                ->select('religion', DB::raw('count(*) as total'))
                ->where('current_province', '=', $replaced)
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
    public function fetchResults(Request $request)
    {

        if ($request['region'] != null) {
            if ($request['province'] != null) {
                if ($request['district'] != null) {
                    $candidatesData = Candidate::where(['current_region' => $request['region']])
                        ->where(['current_province' => $request['province']])
                        ->where(['current_district' => $request['district']])
                        ->with('politicalParty')
                        ->get()->keyBy('id');
                    $voteCount1 = DB::table('votes as v')
                        ->select('cd.name as cname', 'cd.id', 'cd.displayPicture', DB::raw('Count(*) as c'))
                        ->leftJoin('vote_preferences as p', 'p.vote_id', '=', 'v.id')
                        ->leftJoin('candidates as cd', 'cd.id', '=', 'p.first_candidate_id')
                        ->groupBy('cname')
                        // ->orderBy('c', 'desc')
                        ->get()->keyBy('cname')->toArray();
                }
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
        $firstElement = reset($voteCount1);
        $majority_flag = false;
        if ($firstElement) {
            // dd('test');
            if ($firstElement->c / $votesAreaWise['votersInDistrict'] * 100 >= 50) {
                $majority_flag = true;
                // dd('false');
            } else {
                $majority_flag = false;
                // dd('true');
            }
        }
        $district_id = DB::table('districts')->where(['name' => $request['district']])->first()->id;
        $votesCasted = DB::table('votes')->where(['district_id' => $district_id])->count();
        $votesAreaWise['turn_out'] = $votesCasted / $votesAreaWise['votersInDistrict'] * 100;
        usort($voteCount1, function ($item1, $item2) {
            return $item2->c <=> $item1->c;
        });
        //                dd($votesAreaWise,$voteCount, $candidatesData);
        return view('pollingResultsPage', ['district' => $request['district'], 'votesAreaWise' => $votesAreaWise, 'voteCount' => $voteCount1, 'candidates' => $candidatesData, 'election' => $election, 'majority' => $majority_flag]);
    }
    public function fetchResults2ndPref($district, $elect)
    {

        if ($district != null) {
            $candidatesData = Candidate::where(['current_district' => $district])
                ->with('politicalParty')
                ->get()->keyBy('id');
            $voteCount1 = DB::table('votes as v')
                ->select('cd.name as cname', 'cd.id', 'cd.displayPicture', DB::raw('Count(*) as c'))
                ->leftJoin('vote_preferences as p', 'p.vote_id', '=', 'v.id')
                ->rightJoin('candidates as cd', 'cd.id', '=', 'p.first_candidate_id')
                ->groupBy('cname', 'id', 'displayPicture')
                ->where('cd.current_district', '=', $district)
                // ->orderBy('c', 'desc')
                ->get()->keyBy('cname')->toArray();
            $voteCount2 = DB::table('votes as v')
                ->select('cd.name as cname', 'cd.id', 'cd.displayPicture', DB::raw('Count(*) as c'))
                ->leftJoin('vote_preferences as p', 'p.vote_id', '=', 'v.id')
                ->rightJoin('candidates as cd', 'cd.id', '=', 'p.second_candidate_id')
                ->groupBy('cname')
                // ->orderBy('c', 'desc')
                ->where('cd.current_district', '=', $district)
                ->get()->keyBy('cname')->toArray();
            // dd($voteCount2, $voteCount1, $candidatesData);
        }

        $election = Election::find($elect);
        $votesAreaWise = [];
        $votersInDistrict = DB::table('voters')->where('current_district', '=', $district)->count();
        $votesAreaWise['votersInDistrict'] = $votersInDistrict;

        $firstElement = reset($voteCount2);
        $majority_flag = false;
        if ($firstElement) {
            foreach ($voteCount2 as $key => $vote) {
                $vote->c += $voteCount1[$key]->c;
            }
            // dd($voteCount2);
            if ($firstElement->c / $votesAreaWise['votersInDistrict'] * 100 >= 50) {
                $majority_flag = true;
                // dd('false');
            } else {
                $majority_flag = false;
                // dd('true');
            }
        }
        $district_id = DB::table('districts')->where(['name' => $district])->first()->id;
        $votesCasted = DB::table('votes')->where(['district_id' => $district_id])->count();
        $votesAreaWise['turn_out'] = $votesCasted / $votesAreaWise['votersInDistrict'] * 100;
        usort($voteCount2, function ($item1, $item2) {
            return $item2->c <=> $item1->c;
        });
        //                dd($votesAreaWise,$voteCount, $candidatesData);
        return view('pollingResults2ndPrefPage', ['votesAreaWise' => $votesAreaWise, 'voteCount' => $voteCount2, 'candidates' => $candidatesData, 'election' => $election, 'majority' => $majority_flag, 'district' => $district]);
    }
    public function fetchResults3rdPref($district, $elect)
    {

        if ($district != null) {
            $candidatesData = Candidate::where(['current_district' => $district])
                ->with('politicalParty')
                ->get()->keyBy('id');
            $voteCount1 = DB::table('votes as v')
                ->select('cd.name as cname', 'cd.id', 'cd.displayPicture', DB::raw('Count(*) as c'))
                ->leftJoin('vote_preferences as p', 'p.vote_id', '=', 'v.id')
                ->rightJoin('candidates as cd', 'cd.id', '=', 'p.first_candidate_id')
                ->groupBy('cname')
                ->where('cd.current_district', '=', $district)
                // ->orderBy('c', 'desc')
                ->get()->keyBy('cname')->toArray();
            $voteCount2 = DB::table('votes as v')
                ->select('cd.name as cname', 'cd.id', 'cd.displayPicture', DB::raw('Count(*) as c'))
                ->leftJoin('vote_preferences as p', 'p.vote_id', '=', 'v.id')
                ->rightJoin('candidates as cd', 'cd.id', '=', 'p.second_candidate_id')
                ->groupBy('cname')
                // ->orderBy('c', 'desc')
                ->where('cd.current_district', '=', $district)
                ->get()->keyBy('cname')->toArray();
            $voteCount3 = DB::table('votes as v')
                ->select('cd.name as cname', 'cd.id', 'cd.displayPicture', DB::raw('Count(*) as c'))
                ->leftJoin('vote_preferences as p', 'p.vote_id', '=', 'v.id')
                ->rightJoin('candidates as cd', 'cd.id', '=', 'p.third_candidate_id')
                ->groupBy('cname')
                // ->orderBy('c', 'desc')
                ->where('cd.current_district', '=', $district)
                ->get()->keyBy('cname')->toArray();
            // dd($voteCount2, $voteCount1, $candidatesData);
        }

        $election = Election::find($elect);
        $votesAreaWise = [];
        $votersInDistrict = DB::table('voters')->where('current_district', '=', $district)->count();
        $votesAreaWise['votersInDistrict'] = $votersInDistrict;

        $firstElement = reset($voteCount3);
        $majority_flag = false;
        if ($firstElement) {
            foreach ($voteCount3 as $key => $vote) {
                $vote->c += $voteCount1[$key]->c + $voteCount2[$key]->c;
            }
            if ($firstElement->c / $votesAreaWise['votersInDistrict'] * 100 >= 50) {
                $majority_flag = true;
            } else {
                $majority_flag = false;
            }
        }

        $district_id = DB::table('districts')->where(['name' => $district])->first()->id;
        $votesCasted = DB::table('votes')->where(['district_id' => $district_id])->count();
        $votesAreaWise['turn_out'] = $votesCasted / $votesAreaWise['votersInDistrict'] * 100;
        usort($voteCount3, function ($item1, $item2) {
            return $item2->c <=> $item1->c;
        });
        return view('pollingResults2ndPrefPage', ['votesAreaWise' => $votesAreaWise, 'voteCount' => $voteCount3, 'candidates' => $candidatesData, 'election' => $election, 'majority' => $majority_flag, 'district' => $district]);
    }
    public function partyResults()
    {
        $districts = DB::table('districts')->get();
        // dd($districts);
        $winners = [];
        foreach ($districts as $district) {
            $voteCount = DB::table('votes as v')
                ->select('cd.name as cname', 'cd.current_district as cdistrict', 'pt.name as pname', 'cd.id', 'cd.displayPicture', DB::raw('Count(*) as c'))
                ->leftJoin('vote_preferences as p', 'p.vote_id', '=', 'v.id')
                ->leftJoin('candidates as cd', 'cd.id', '=', 'p.first_candidate_id')
                ->leftJoin('political_parties as pt', 'cd.political_party_id', '=', 'pt.id')
                ->groupBy('cname')
                ->orderBy('c', 'desc')
                ->where(['cd.current_district' => $district->name])
                ->get()->toArray();
            if ($voteCount) {
                $winner = ['district' => $district->name, 'cdistrict' => $voteCount[0]->cdistrict, 'winner' => $voteCount[0]->cname, 'votes' => $voteCount[0]->c, 'party' => $voteCount[0]->pname];
                $winners[] = $winner;
            }
        }
        $results = array_count_values(array_column($winners, 'party'));
        $sorted = [];
        foreach ($results as $key => $seat) {
            $sort = ['partyName' => $key, 'seats' => $seat];
            $sorted[] = $sort;
        }
        usort($sorted, function ($item1, $item2) {
            return $item2['seats'] <=> $item1['seats'];
        });
        return view('admin.electionSection.partyResults', ['results' => $sorted]);
    }
}

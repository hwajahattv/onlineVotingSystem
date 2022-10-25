<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    //
        public function voterSection()
        {
        $voterCount = count(Voter::all());
        return view('admin.voterSection.voterSectionHome', ['voterCount' => $voterCount]);
        }
}

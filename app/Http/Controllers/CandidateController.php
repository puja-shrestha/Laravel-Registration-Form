<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function generateList(Request $request)
    {
    	$csvData = Candidate::all();
    	return view('candidate')->with('csvData', $csvData);
    }
}

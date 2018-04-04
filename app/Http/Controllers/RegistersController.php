<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class RegistersController extends Controller
{
    public function register(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required',
    		'gender' => 'required',
    		'phoneno' => 'required',
    		'email' => 'required',
    		'address' => 'required',
    		'nationality' => 'required',
    		'dob' => 'required',
    		'education_background' => 'required',
    		'choose_preferred_contact' => 'required'

    	]);

        $candidates = new Candidate;
        $candidates-> name = $request->input('name');
        $candidates-> gender = $request -> input('gender');
        $candidates-> phoneno = $request -> input('phoneno');
        $candidates-> email = $request -> input('email');
        $candidates-> address = $request -> input('address');
        $candidates-> nationality = $request -> input('nationality');
        $candidates-> dob = $request -> input('dob');
        $candidates-> education_background = $request -> input('education_background');
        $candidates-> choose_preferred_contact = $request -> input('choose_preferred_contact');

        $candidates->save();
        return redirect('/')->with('response','Register Successfully');

    }
}

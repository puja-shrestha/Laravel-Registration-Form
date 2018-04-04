<?php

namespace App\Http\Controllers;

use DB;
use Excel;
use Illuminate\Support\Facades\Input;
use App\Candidate;
use App\Http\Requests;
use Illuminate\Http\Request;

class MaatwebsiteDemoController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }

    public function downloadExcel($type)
    {
        $data = Candidate::get()->toArray();
        return Excel::create('candidates_list', function($excel) use ($data) {
            $excel->sheet('candidateSheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request)
    {
        // dd($request->all());
        if(Input::file('import_file')) {
            $path = Input::file('import_file')->getRealPath();
            // dd($path);
            $data = Excel::load($path, function($reader) {
            })->get();
            // dd($data);
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $insert[] = [
                        'name' => $value['name'],  // yestai gara sabai lai . array ko format ma banau
                        'gender' => $value['gender'],
                        'phoneno' => $value['phoneno'],
                        'email' => $value['email'],
                        'address' => $value['address'],
                        'nationality' => $value['nationality'],
                        'dob' => $value['dob'],
                        'education_background' => $value['education_background'],
                        'choose_preferred_contact' => $value['choose_preferred_contact']
                    ];
                }
                // dd($insert);
                if(!empty($insert)) {
                    DB::table('candidates')->insert($insert);
                    echo('Insert record successfully');
                }
            }
        }

        return redirect()->route('candidate');
        // return back();
    }

    public function displayCsv()
    {
        $csvData = Candidate::all();
        // dd($csvData);
        return view('candidate')->with('csvData',$csvData);
    }
}

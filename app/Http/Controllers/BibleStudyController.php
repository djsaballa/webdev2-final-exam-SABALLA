<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BibleStudy;

class BibleStudyController extends Controller
{
    
    public function index(Request $request)
    {
        $bs_request = new BibleStudy();
        return view('index', compact('bs_request'));
    }

    public function sent(Request $request)
    {
        $bs_request = new BibleStudy();
        $bs_request->name = $request->name;
        $bs_request->email = $request->email;
        $bs_request->contact_number = $request->contact_number;
        $bs_request->birthdate = $request->birthdate;
        $bs_request->religion = $request->religion;
        $bs_request->bs_date = $request->bs_date;
        $bs_request->bs_time = $request->bs_time;
        $bs_request->bs_address = $request->bs_address;

        if ($bs_request->save()) {
            return redirect('/thank-you');
        }
        return redirect('/thank-you');
    }

    public function requests(Request $request)
    {
        $bs_requests = BibleStudy::all();
        return view('bible-study-requests', compact('bs_requests'));
    }

    public function thankyou(Request $request)
    {
        return view('thank-you');
    }
}

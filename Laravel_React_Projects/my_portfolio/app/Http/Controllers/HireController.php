<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use Illuminate\Http\Request;
use Mail;

class HireController extends Controller
{

    public function storeHire(Request $request)
    {
        $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|email|max:250',
            'duration' => 'required|max:250',
            'subject' => 'required|max:250',
            'msg' => 'required|max:3500',
        ]);

        $input = $request->all();

        Hire::create($input);

        //  Send mail to admin
        \Mail::send('emails.hire', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'duration' => $input['duration'],
            'subject' => $input['subject'],
            'msg' => $input['msg'],
        ), function ($msg) use ($request) {
            $msg->from($request->email);
            $msg->to('client@webxazim.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Submission done!']);
    }
}

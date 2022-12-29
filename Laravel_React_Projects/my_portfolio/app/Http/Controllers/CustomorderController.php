<?php

namespace App\Http\Controllers;

use App\Models\Customorder;
use Illuminate\Http\Request;
use Mail;

class CustomorderController extends Controller
{

    public function storeCustomOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|email|max:250',
            'msg1' => 'required|max:1500',
            'msg2' => 'required|max:1500',
            'msg3' => 'required|max:1500',
            'msg4' => 'required|max:1500',
            'msg5' => 'required|max:1500',
            'msg6' => 'required|max:1500',
            'msg7' => 'required|max:1500',
            'msg8' => 'required|max:1500',
            'msg9' => 'required|max:1500',
            'msg10' => 'required|max:1500',
            'msg11' => 'required|max:1500',
            'msg12' => 'required|max:1500',
            'msg13' => 'required|max:3500',
        ]);

        $input = $request->all();

        Customorder::create($input);

        //  Send mail to admin
        \Mail::send('emails.customorder', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'msg1' => $input['msg1'],
            'msg2' => $input['msg2'],
            'msg3' => $input['msg3'],
            'msg4' => $input['msg4'],
            'msg5' => $input['msg5'],
            'msg6' => $input['msg6'],
            'msg7' => $input['msg7'],
            'msg8' => $input['msg8'],
            'msg9' => $input['msg9'],
            'msg10' => $input['msg10'],
            'msg11' => $input['msg11'],
            'msg12' => $input['msg12'],
            'msg13' => $input['msg13'],
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('client@webxazim.com', 'Admin')->subject($request->get('name'));
        });

        return redirect()->back()->with(['success' => 'Submission Successful!']);
    }
}

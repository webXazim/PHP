<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contactForm');
    }

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|email|max:250',
            'phone' => 'required|string|max:15',
            'subject' => 'required|max:1500',
            'msg' => 'required|max:4000',
        ]);

        $input = $request->all();

        Contact::create($input);

        //  Send mail to admin
        \Mail::send('emails.contact', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'msg' => $input['msg'],
        ), function ($msg) use ($request) {
            $msg->from($request->email);
            $msg->to('azim@webxazim.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Successfully submitted!']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactForm extends Controller
{
    public function view() {
        return view('contact');
    }

    public function submit(Request $request) {
        $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'comments' => 'required'
        ]);

        Mail::send('email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comments' => $request->get('comments') ],
                function ($message) {
                        $message->from('no.reply@uta.edu');
                        $message->to('danevil@uta.edu', 'CSE 5335 Form')
                        ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }
}

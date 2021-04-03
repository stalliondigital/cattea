<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'type'  => 'required',
        ]);


        Contact::create($request->all());

        \Mail::send('email', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'type' => $request->get('type'),
            'messages' => $request->get('messages'),
        ), function($message) use ($request) {
            $message->from($request->email);
            $message->to('info@cattea.ca', 'Hello Tanita')->subject("Photography Request");
        });

        return back()->with('success', 'Thank you for contacting us.');
    }
}



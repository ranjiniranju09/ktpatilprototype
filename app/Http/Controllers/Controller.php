<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

abstract class Controller
{
    public function about()
    {
        return view('about.vision_mission');
    }
    public function showForm() {
        return view('contact');
    }

    public function submit(Request $request) {
        $validated = $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'phone'    => 'required|digits:10',
            'city'     => 'required|string',
            'program'  => 'required|string',
            'state'    => 'required|string',
            'message'  => 'required|string|max:1000',
        ], [
            'name.required'    => 'Please enter your name.',
            'email.email'      => 'Please enter a valid email address.',
            'phone.digits'     => 'Phone number must be 10 digits.',
            'message.required' => 'Please write a message.',
        ]);


        // Send email
        Mail::to('ranjini.forstu@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }


}

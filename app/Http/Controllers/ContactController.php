<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'city' => 'required|string',
            'program' => 'required|string',
            'state' => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        $formData = $request->all();

        // Send one mail with CC
        // Mail::to('ktpcoeo@gmail.com')
        //     ->cc('manojpasare@gmail.com')
        //     ->send(new ContactFormMail($formData));

        // Send one mail with CC
        Mail::to('ranjini.forstu@gmail.com')
            ->cc('rahul@forstu.co')
            ->send(new ContactFormMail($formData));


        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}

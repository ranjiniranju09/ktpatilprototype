<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'phone'    => 'required|digits:10',
            'city'     => 'required|string',
            'program'  => 'required|string',
            'state'    => 'required|string',
        ]);

        return view('showcontact', ['validated' => $validated]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    // Show form
    public function create()
    {
        return view('contact.create');
    }

    // Store data
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:100',
            'phone_number' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'subject' => 'required|string|max:100',
            'message' => 'required|string',
        ]);


        Contact::create($request->all());

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

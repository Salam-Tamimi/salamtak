<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact.contact');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($data);

        Mail::to('salam.tamimi99@gmail.com')->send(new ContactReceived($contact));

        // Alert::success('Success', 'Form submitted successfully');
        
        return redirect()->route('contact')->with('success', 'Form submitted successfully!');
    }
}

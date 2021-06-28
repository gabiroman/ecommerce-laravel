<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $mail = new Contact($request->all());
        Mail::to('grbrainless@gmail.com')->send($mail);
        return redirect()->route('contact.index')->with('info', 'Message sent');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\Contact as ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use stdClass;

class ContactController extends Controller
{

    public function index()
    {
        return view('pengguna.kontak');
    }

    public function sendMessage(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required'
        ]);

        Contact::create($validated);
        
        $contact = new stdClass();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        
        Mail::to('admin@bpnjember.go.id', 'Admin')->send(new ContactMail($contact));

        return redirect()->back()->with('success', 'Pesan Anda segera kami balas.');
    }
}

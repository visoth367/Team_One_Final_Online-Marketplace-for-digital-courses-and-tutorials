<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Models\ContactMessage as Contact;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function submitContactForm(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $contact = ContactMessage::create([
            // 'user_id' => Auth::id(),
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);


        return response()->json(['message' => 'Contact form submitted successfully', 'contact' => $contact], 201);
    }

    public function getContacts()
    {
        $contacts = Contact::all();
        return response()->json($contacts, 200);
    }
}

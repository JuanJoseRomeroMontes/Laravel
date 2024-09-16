<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        $contacts = Contact::all();
        return response()->json(['Contacts' => $contacts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'comment' => 'required|string',
        ]);

        $contact = Contact::create($validatedData);

        return response()->json(['deletedContact' => $contact]);
    }
}

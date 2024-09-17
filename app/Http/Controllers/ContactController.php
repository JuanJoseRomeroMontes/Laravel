<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.Contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'comment' => 'required|string',
        ]);

        $validatedData['date'] = now()->toDateString();

        $contact = Contact::create($validatedData);

        return redirect('/contact')->with('status', 'Comment sent, thank you!');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Enum\ActivityEnum;
use Illuminate\Validation\Rule;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
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
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'email' => 'required|email',
            'phone' => 'required|number',
            'subject' => 'required|string',
            'comment' => 'required|string',
        ]);

        $activity = Activity::create($validatedData);

        return view('activities.store', ['activity' => $activity]);
    }
}
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
        $activities = Activity::all();

        return view('activities.index', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'date' => 'required|date',
            'notes' => 'required|string',
        ]);

        $activity = Activity::create($validatedData);

        return view('activities.store', ['activity' => $activity]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return view('activities.show', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'date' => 'required|date',
            'notes' => 'required|string',
            'satisfaction' => 'required|numeric|min:1|max:10',
            'paid' => 'required'
        ]);

        $activity = Activity::findOrFail($id);

        $activity->update($request->all());

        return view('activities.update', ['activity' => $activity]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Activity::destroy($id);

        return view('activities.destroy', ['activity' => $activity]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('images')->get();
        return view('pages.Rooms',["rooms" => $rooms]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return response()->json(['room' => $room]);
    }
}

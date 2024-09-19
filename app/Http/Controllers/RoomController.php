<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->query('checkIn') && $request->query('checkOut'))
        $rooms =  Room::getAvailableRooms($request);
        else
            $rooms = Room::with('images')->get();

        return view('pages.Rooms',["rooms" => $rooms]);
    }

    public function show($id)
    {
        $room = Room::with(['room_type', 'amenities', 'images'])->findOrFail($id);

        return view('pages.RoomInfo', compact('room'));
    }
}

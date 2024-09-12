<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        return response()->json(['bookings' => $bookings]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return response()->json(['booking' => $booking]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'orderDate' => 'required|date',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'specialRequest' => 'required|string',
            'roomType' => 'required|number',
            'status' => 'required|in:Check-Out,Check-In',
            'roomId' => 'required|number',
        ]);

        $booking = Booking::create($validatedData);

        return response()->json(['deletedBooking' => $booking]);
    }
}

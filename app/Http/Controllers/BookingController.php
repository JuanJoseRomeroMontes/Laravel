<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'checkInDate' => 'required|date',
            'checkOutDate' => 'required|date',
            'specialRequest' => 'nullable|string',
            'roomId' => 'required|integer',
        ]);

        $validatedData['orderDate'] = now()->toDateString();

        $booking = Booking::create($validatedData);

        return redirect('/')->with('status', 'Booking reserved, thank you!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        return DB::select('SELECT * FROM bookings');
    }

    public function store(Request $request)
    {
        $booking = Booking::create([
            'user_id' => $request->user()->id ?? 1,
            'event_id' => $request->input('event_id'),
        ]);

        return response()->json($booking, 200);
    }
}


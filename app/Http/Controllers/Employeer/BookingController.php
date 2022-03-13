<?php

namespace App\Http\Controllers\Employeer;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::whereEmployeer_id(auth()->user()->id)->get();
        return view('employeer.bookings', compact('bookings'));
    }
}

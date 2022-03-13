<?php

namespace App\Http\Controllers\Admin\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with([
            'employee',
            'employeer'
        ])->get();
        return view('admin.booking.index', compact('bookings'));
    }
}

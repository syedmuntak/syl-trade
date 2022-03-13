<?php

namespace App\Http\Controllers\Employee\Booking;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::whereEmployee_id(auth()->user()->employee->id)->get();
        return view('employee.bookings', compact('bookings'));
    }

    public function change_status($id)
    {

        $booking = Booking::whereId($id)->first();
        $status = $booking->status === 'Pendding' ? 'Approved' : 'Pendding';

        $booking->update([
            'status' => $status
        ]);

        return redirect()->back();
    }
}

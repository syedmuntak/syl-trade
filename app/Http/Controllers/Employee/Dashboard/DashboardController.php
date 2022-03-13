<?php

namespace App\Http\Controllers\Employee\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::whereEmployee_id(auth()->user()->id)->get();
        return view('employee.dashboard', compact('bookings'));
    }
}

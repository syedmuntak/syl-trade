<?php

namespace App\Http\Controllers\Employeer\Dashboard;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::whereEmployeer_id(auth()->user()->id)->get();
        return view('employeer.dashboard', compact('bookings'));
    }
}

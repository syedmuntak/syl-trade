<?php

namespace App\Http\Controllers\Admin\Dashboard;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        $categories = Category::all();
        $employees = Employee::all();
        return view('admin.dashboard', compact('bookings', 'categories', 'employees'));
    }

}

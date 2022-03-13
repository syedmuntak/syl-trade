<?php

namespace App\Http\Controllers\User\Hire;

use App\Models\Booking;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HireController extends Controller
{
    public function index($id)
    {

        $employee = Employee::whereId($id)->firstOrFail();
        return view('user.employee.hire', compact(
            'employee'
        ));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $ob = [
            'employee_id' => $data['employee_id'],
            'employeer_id' => Auth::user()->employeer->id,
            'name' => $data['name'],
            'contact_no' => $data['contact_no'],
            'address' => $data['address'],
            'booking_date' => $data['booking_date'],
            'booking_time' => $data['booking_time'],
            'payment_method' => $data['payment_method'],
            'status' => 'Pendding',
            'user_id' => Auth::user()->id,
        ];
        $boooking = Booking::create($ob);
        if ($request->get('payment_method') == "Stripe") {

            return view('user.stripe.payment')->with('employee', 'employeer');
        } else {

            return redirect()->to('/')->with('employee', 'employeer');
        }
    }
}

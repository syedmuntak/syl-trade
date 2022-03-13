<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Employeer;
use App\Models\Booking;
use App\Models\Employee;
use App\Models\Payment;
use Stripe;
use App\Models\Bkash;
use App\Models\District;
use Charge;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::with('profiles')
            ->inRandomOrder()
            ->paginate(6);

        $categories_all = Category::with('profiles')->get();

        $profiles = Employee::with('category')
            ->inRandomOrder()
            ->paginate(8);

        $districts = District::all();

        $popular_profiles = Employee::withCount('bookings')
            ->having('bookings_count', '>=', 2)
            ->orderByDesc('bookings_count')
            ->get();

        return view('user.index', compact('categories', 'profiles', 'districts', 'categories_all', 'popular_profiles'));
    }

    public function payment()
    {
        return view('user.stripe.payment');
    }

    public function stripe(Request $req)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $ob = [
            $response = Stripe\Charge::create([
                "amount" => $req->input('amount') * 100,
                "receipt_email" => $req->get('email'),
                "currency" => "usd",
                "source" => $req->stripeToken,
                "description" => "payment"
            ])
        ];

        if ($ob) {

            $arr_payment_data = new Payment;

            $isPaymentExist = Payment::where('id', $arr_payment_data['id'])->first();

            if (!$isPaymentExist) {
                $payment = new Payment;
                $payment->payment_id = $req->get('user_id');
                $payment->payer_email = $req->get('email');
                $payment->amount = $req->input('amount') * 100;
                $payment->payment_status = 'done';
                $payment->save();
            }

            return redirect()->to('/');
        } else {
            return $req->getMessage();
        }
    }

    // Bkash
    public function bkash($id)
    {

        $bkash = Bkash::all();

        // dd($employee);
        return view('user.stripe.bkash');
    }


    public function bkashstore(Request $request)
    {
        $categories = Category::with('profiles')->get();
        $profiles = Employee::with('category');
        $data = $request->all();
        $ob = [
            'user_id' =>  Auth::user()->id,
            'name' => $data['name'],
            'email' => $data['name'],
            'contact_no' => $data['contact_no'],
            'transaction_id' => $data['transaction_id'],
        ];
        $bkash = bkash::create($ob);
        return view('user.index', compact('categories', 'profiles'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function dashboard()
    {
        return view('sales.dashboard');
    }

    public function listApartments()
    {
        $ready = Apartment::where('status', 'ready')->get();
        $sold = Apartment::where('status', 'sold')->get();
        return view('sales.apartments', compact('ready', 'sold'));
    }

    public function bookApartment(Request $request)
    {
        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->apartment_id = $request->apartment_id;
        $booking->customer_name = $request->customer_name;
        $booking->down_payment = $request->down_payment;
        $booking->status = 'pending';
        $booking.save();

        return redirect()->route('sales.dashboard')->with('status', 'Booking request sent.');
    }
}

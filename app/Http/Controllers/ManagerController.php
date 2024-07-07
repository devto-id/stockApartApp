<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ManagerController extends Controller
{
    public function dashboard()
    {
        return view('manager.dashboard');
    }

    public function listApprovals()
    {
        $bookings = Booking::where('status', 'pending')->get();
        return view('manager.approvals', compact('bookings'));
    }

    public function approveBooking(Request $request)
    {
        $booking = Booking::find($request->booking_id);
        $booking->status = 'approved';
        $booking->save();

        $apartment = $booking->apartment;
        $apartment->status = 'sold';
        $apartment->save();

        return redirect()->route('manager.approvals')->with('status', 'Booking approved.');
    }
}

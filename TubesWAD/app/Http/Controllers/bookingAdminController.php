<?php

namespace App\Http\Controllers;

use App\Models\bookings;

use Illuminate\Http\Request;

class bookingAdminController extends Controller
{
    public function index()
    {
        $bookings = bookings::all();
        return view('Order', [
            'active' =>  'home',
            'bookings' => $bookings]);
    }
}

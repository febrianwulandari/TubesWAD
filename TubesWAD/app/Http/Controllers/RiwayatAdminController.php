<?php

namespace App\Http\Controllers;

use App\Models\bookings;


use Illuminate\Http\Request;

class RiwayatAdminController extends Controller
{
    public function index()
      
    {
        $booking = bookings::where('status','=','Done')->get();
        return view('RiwayatAdmin', [
            'active' =>  'riwayat',
            'booking' => $booking]);
    }
}

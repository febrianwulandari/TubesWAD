<?php

namespace App\Http\Controllers;

use App\Models\bookings;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class RiwayatAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
      
    {
        $booking = bookings::where('status','=','Done')->get();
        return view('RiwayatAdmin', [
            'active' =>  'riwayat',
            'booking' => $booking]);
    }
    public function generatePDF()
    {           
        $data = bookings::where('status','=','Acc')->orWhere('status','=','Done')->get();
        $pdf = PDF::loadView('RiwayatPendapatan',[
          'data' =>  $data,
          'total' => $this->totalBayar(),
        ]);
        return $pdf->download('LaporanRiwayatPendapatan.pdf');
    }

    public function totalBayar()
    {
        $total = bookings::all()->sum('total_bayar');
        return $total;
    }

}


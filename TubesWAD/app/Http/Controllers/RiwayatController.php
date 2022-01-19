<?php

namespace App\Http\Controllers;

use App\Models\bookings;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
class RiwayatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Modelbookings = new bookings();

    }
      public function index()
      
    {
        $booking = bookings::where('status','=','Done')->where('id_user','=', Auth::user()->id)->get();
        return view('Pelanggan.RiwayatPelanggan', [
            'active' =>  'riwayat',
            'booking' => $booking]);
    }

    public function generatePDF($id)
    {           
        $data = bookings::where('id',$id)->get();
        $pdf = PDF::loadView('Pelanggan.Nota',[
          'data' => $data,
        ]);
        return $pdf->download('NotaPembayaran.pdf');
    }


}

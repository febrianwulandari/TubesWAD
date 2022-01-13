<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\bookings;
use Exception;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Modelbookings = new bookings();

    }
    public function index()
    {
        $booking = bookings::all();
        return view('Pelanggan.bookingPelanggan', [
            'active' =>  'orders',
            'booking' => $booking]);
    }
    public function addBooking()
    {
        return view('Pelanggan.addBooking',[
            'active' =>  'orders',
        ]);
    }
    public function getID($id){
        $layans = DB::table('layanans')->where('id',$id)->get();
        return view('Pelanggan.addBooking', [
            'active' =>  'orders',
            'layans' => $layans 
        ]);
    }
    public function addData(Request $request)
    {
        try{
            $this->validate($request, [
                'id_layanan'   => 'required',
                'tanggal_booking'   => 'required',
                'berat_laundry'   => 'required',
                'nama_pelanggan'   => 'required',
                'status'   => 'required',
                'harga'   => 'required'
            ]);
    
            bookings::create([
                'id_layanan' => $request->id_layanan,
                'tanggal_booking' => $request->tanggal_booking,
                'berat_laundry' => $request->berat_laundry,
                'nama_pelanggan' => $request->nama_pelanggan,
                'status' => $request->status,
                'harga' => $request->harga
            ]);
     
            return redirect('/pelanggan/booking')->with('sukses',' Data berhasil di tambahkan');
        
        }
        catch (Exception $f){
            return redirect('/pelanggan/booking')->with('gagal',$f);
        }
      
}

}

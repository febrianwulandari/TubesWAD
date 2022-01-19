<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\bookings;
use Exception;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->Modelbookings = new bookings();

    }
    public function index()
    {
        $booking = bookings::where('status','=','Waiting')->where('id_user','=',Auth::user()->id)->get();
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
                'id_user'   => 'required',
                'status'   => 'required',
                'harga'   => 'required',
                'alamat' => 'required',

            ]);

    
            bookings::create([
                'id_layanan' => $request->id_layanan,
                'tanggal_booking' => $request->tanggal_booking,
                'berat_laundry' => $request->berat_laundry,
                'id_user' => $request->id_user,
                'status' => $request->status,
                'harga' => $request->harga,
                'alamat' => $request->alamat,
            ]);
     
            return redirect('/pelanggan/booking')->with('sukses',' Data berhasil di tambahkan');
        
        }
        catch (Exception $f){
            return redirect('/pelanggan/booking')->with('gagal',$f);
        }
      
}

        public function getDetailBooking($id){
            $book = bookings::where('id',$id)->get();
            return view('Pelanggan.detailBooking', [
                'active' =>  'orders',
                'book' => $book
            ]);
        }

        public function addPembayaran($id){
            $pembayaran = DB::table('booking')->where('id',$id)->get();
            return view('Pelanggan.Pembayaran', [
                'active' =>  'orders',
                'pembayaran' =>$pembayaran
            ]);
        }

        public function updateDataPembayaran(Request $request){
            try{
                $this->validate($request, [
                    'id'   => 'required',
                    'status' => 'required',
                    'total_bayar'   => 'required',
                    'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                    'tanggal_pembayaran'   => 'required',
                ]);
            
                $file = $request->file('image');
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'asset';
                $file->move($tujuan_upload,$nama_file);
            
                DB::table('booking')->where('id','=',$request->id)->update([
                    'status'                    => $request->status,
                    'total_bayar'               => $request->total_bayar,
                    'image'                     => $nama_file,
                    'tanggal_pembayaran'        => $request->tanggal_pembayaran,
                    ]);
                    return redirect('/pelanggan/booking')->with('sukses',' Berhasil melakukan pembayaran');
            }
            catch(Exception $f){
                    return redirect('/pelanggan/booking')->with('gagal',$f);
    
            }
          
        }
          
    }
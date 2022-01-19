<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\bookings;
use Illuminate\Support\Facades\Auth;
use App\Models\layanan;

class bookingAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $bookings = bookings::all();
        return view('HomeAdmin', [
            'active' =>  'home',
            'bookings' => $bookings,
            'layanan' => layanan::all(),
            'nama_layanan' => $this->namaLayanan(),
            'total' => $this->totalBayar(),
            'totalOr' => $this->totalOrder(),
            'totalPel' => $this->totalPel(),
            'total_layanan' => $this->totalLayanan()
        ]);
    }

    public function orders()
    {
        $bookings = bookings::where('status','=','Waiting')->orWhere('status','=','Acc')->get();
        return view('OrderAdmin', [
            'active' =>  'order',
            'bookings' => $bookings,
        ]);
    }

    public function updateDataStatus(Request $request){
        try{
            $this->validate($request, [
                'id'   => 'required',
                'status' => 'required',
            ]);
        
            DB::table('booking')->where('id','=',$request->id)->update([
                'status'                    => $request->status
                ]);
                return redirect('/orders')->with('sukses',' Berhasil Acc');
        }
        catch(Exception $f){
                return redirect('/orders')->with('Gagal Acc',$f);

        }
      
    }

    public function totalBayar()
    {
        $total = bookings::all()->sum('total_bayar');
        return $total;
    }

    public function totalOrder()
    {
        $total = bookings::where('status','=','Waiting')->orWhere('status','=','Acc')->count('id');
        return $total;
    }

    public function totalPel()
    {
        $total = bookings::all()->count('id_user');
        return $total;
    }

    public function namaLayanan(){
        $list= array();
        $nama_layanan = DB::table('layanans')->select('nama_layanan')->pluck('nama_layanan')->all();
        foreach($nama_layanan as $nama){
            array_push($list, $nama);
        }
        return array_values($list);
    }

    public function totalLayanan(){
        $list = array();
        $totalLayanan = layanan::all();
        foreach($totalLayanan as $total){
            $row = bookings::where('id_layanan','=',$total->id)->count();
            array_push($list, $row);
        }
        return $list;
    }

    public function hapus($id)
    {
        try {

            bookings::where('id',$id)->delete();
            return redirect('/orders')->with('sukses',' Data berhasil dihapus');
    
        }
        catch (Exception $f){
            return redirect('/orders')->with('gagal',' Data tidak dapat dihapus, karena masih digunakan !');
        }
       
    }

    


}

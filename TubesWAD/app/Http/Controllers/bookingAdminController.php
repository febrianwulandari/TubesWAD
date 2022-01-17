<?php

namespace App\Http\Controllers;

use App\Models\bookings;
use App\Models\layanan;
use Illuminate\Http\Request;

class bookingAdminController extends Controller
{
    public function index()
    {
        $bookings = bookings::all();
        return view('HomeAdmin', [
            'active' =>  'home',
            'bookings' => $bookings,
            'layanan' => layanan::all(),
            'total' => $this->totalBayar(),
            'total_layanan' => $this->totalLayanan()
        ]);
    }

    public function orders()
    {
        $bookings = bookings::all();
        return view('OrderAdmin', [
            'active' =>  'order',
            'bookings' => $bookings,
        ]);
    }

    public function totalBayar()
    {
        $total = bookings::all()->sum('total_bayar');
        return $total;
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


}

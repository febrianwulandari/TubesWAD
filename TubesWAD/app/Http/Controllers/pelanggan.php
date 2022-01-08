<?php

namespace App\Http\Controllers;

use App\Models\Mpelanggan;
use Illuminate\Http\Request;

class pelanggan extends Controller
{
    public function index()
    {
        $pelanggan = Mpelanggan::all();
        return view('pelanggan', [
            'pelanggan' => $pelanggan]);
    }
    public function viewAddPelanggan()
    {
        $pelang = Mpelanggan::all();
        return view('addPelanggan', [
            'pelanggan' => $pelang]);
    }
}

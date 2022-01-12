<?php

namespace App\Http\Controllers;

use App\Models\layanan as ModelsLayanan;

use Illuminate\Http\Request;

class layananPelanggan extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $layanan = ModelsLayanan::all();
        return view('Pelanggan.layananPelanggan', [
        'active' =>  'layanan',
        'layanan' => $layanan]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\layanan as ModelsLayanan;

use Illuminate\Http\Request;

class layananPelanggan extends Controller
{
    public function index()
    {
        $layanan = ModelsLayanan::all();
        return view('Pelanggan.layananPelanggan', [
        'layanan' => $layanan]);
    }
}

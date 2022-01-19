<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 
        return view('Pelanggan.homePelanggan',[
                'active' =>  'home'
        ]);
    }

    public function updateAkun(Request $request)
    {
        if (!Hash::check($request->password_lama, Auth::user()->password)) {
            return back()->with('gagal', 'Password not match');
        }

        $request->validate([
            'password_lama' => 'min:5|max:255',
            'password_baru' => 'min:5|max:255',
        ]);

        Auth::user()->password = Hash::make($request->password_baru);
        Auth::user()->save();
        return redirect('/home')->with('sukses', 'Berhasil Memperbarui Password');
    }

    

}

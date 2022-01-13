<?php

namespace App\Http\Controllers;

use App\Models\User;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PelangganAdmin extends Controller
{
    public function index()
    {
        $pelanggan = User::all();
        return view('pelanggan', [
            'active' =>  'pelanggan',
            'pelanggan' => $pelanggan]);
    }

    public function hapus($id)
    {
        try {

            DB::table('users')->where('id',$id)->delete();
            return redirect('/pelanggan')->with('sukses',' Data berhasil dihapus');
    
        }
        catch (Exception $f){
            return redirect('/pelanggan')->with('gagal',' Data tidak dapat dihapus, karena masih digunakan !');
        }
       
    }
    
    public function viewAdd()
    {
        return view('addPelanggan',
        [
            'active' =>  'pelanggan',
        ]);
    }

    public function add(Request $request)
    {
        try{

            $this->validate($request, [
                'name'   => 'required',
                'email'   => 'required',
                'password'   => 'required',
            ]);
    
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);
     
            return redirect('/pelanggan ')->with('sukses','Data berhasil ditambahkan');
    
        }
        catch (Exception $f){
            return redirect('/pelanggan')->with('gagal',' Gagal Tambah Data');
        }
       
        }




}

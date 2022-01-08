<?php

namespace App\Http\Controllers;

use App\Models\ModelPelanggan;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelangganAdmin extends Controller
{
    public function index()
    {
        $pelanggan = ModelPelanggan::all();
        return view('pelanggan', [
            'pelanggan' => $pelanggan]);
    }

    public function hapus($id)
    {
        try {

            DB::table('pelanggans')->where('id',$id)->delete();
            return redirect('/pelanggan')->with('sukses',' Data berhasil dihapus');
    
        }
        catch (Exception $f){
            return redirect('/pelanggan')->with('gagal',' Data tidak dapat dihapus, karena masih digunakan !');
        }
       
    }
    
    public function viewAdd()
    {
        return view('addPelanggan');
    }

    public function add(Request $request)
    {
        try{

            $this->validate($request, [
                'email'   => 'required',
                'password'   => 'required',
                'nama_pelanggan'   => 'required',
                'alamat'   => 'required',
            ]);
    
            ModelPelanggan::create([
                'email' => $request->email,
                'password' => $request->password,
                'nama_pelanggan' => $request->nama_pelanggan,
                'alamat' => $request->alamat,
            ]);
     
            return redirect('/pelanggan ')->with('sukses','Data berhasil ditambahkan');
    
        }
        catch (Exception $f){
            return redirect('/pelanggan')->with('gagal',' Gagal Tambah Data');
        }
       
        }


        public function viewedit($id){
            $pelanggan = DB::table('pelanggans')->where('id',$id)->get();
            return view('updatePelanggan', [
                'pelanggan' => $pelanggan]);
        }
    
        public function update(Request $request){
    
            try{
                $this->validate($request, [
                    'id'   => 'required',
                    'email'   => 'required',
                    'password'   => 'required',
                    'nama_pelanggan'   => 'required',
                    'alamat'   => 'required',
               
                ]);
        
                DB::table('pelanggans')->where('id',$request->id)->update([
                    'email'             => $request->email,
                    'password'            => $request->password,
                    'nama_pelanggan'      => $request->nama_pelanggan,
                    'alamat'      => $request->alamat,
                    ]);
                    return redirect('/pelanggan')->with('sukses',' Data berhasil di update');
    
            }
            catch(Exception $f){
                return redirect('/pelanggan')->with('gagal',' Data tidak dapat diupdate');
    
            }
          
        }

}

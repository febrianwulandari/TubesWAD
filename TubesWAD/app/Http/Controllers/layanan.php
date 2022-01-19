<?php

namespace App\Http\Controllers;

use App\Models\layanan as ModelsLayanan;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class layanan extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $layanan = ModelsLayanan::all();
        return view('layanan', [
            'active' =>  'layanan',
            'layanan' => $layanan]);
    }

    public function viewAdd()
    {
        return view('addLayanan',[
            'active' =>  'layanan',
        ]);
    }

    public function add(Request $request)
    {
        try{

            $this->validate($request, [
                'nama_layanan'   => 'required',
                'harga'   => 'required',
                'desc'   => 'required',
                'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
           
            ]);
    
            $file = $request->file('image');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'asset';
            $file->move($tujuan_upload,$nama_file);
    
            ModelsLayanan::create([
                'nama_layanan' => $request->nama_layanan,
                'harga' => $request->harga,
                'desc' => $request->desc,
                'image' => $nama_file,
            ]);
     
            return redirect('/layanan ')->with('sukses','Data berhasil ditambahkan');
    
        }
        catch (Exception $f){
            return redirect('/layanan')->with('gagal',' Gagal Tambah Data');
        }
       
        }

        public function hapus($id)
        {
            try {
    
                DB::table('layanans')->where('id',$id)->delete();
                return redirect('/layanan')->with('sukses',' Data berhasil dihapus');
        
            }
            catch (Exception $f){
                return redirect('/layanan')->with('gagal',' Data tidak dapat dihapus, karena masih digunakan !');
            }
           
        }

        public function viewedit($id){
            $layanan = DB::table('layanans')->where('id',$id)->get();
            return view('updateLayanan', [
                'active' =>  'layanan',
                'layanan' => $layanan]);
        }
    
        public function update(Request $request){
    
            try{
                $this->validate($request, [
                    'id'   => 'required',
                    'nama_layanan'   => 'required',
                    'harga'   => 'required',
                    'desc'   => 'required',
                    'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
               
                ]);
        
                $file = $request->file('image');
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'asset';
                $file->move($tujuan_upload,$nama_file);
        
        
                DB::table('layanans')->where('id',$request->id)->update([
                    'nama_layanan'             => $request->nama_layanan,
                    'harga'            => $request->harga,
                    'desc'      => $request->desc,
                    'image'            => $nama_file
                    ]);
                    return redirect('/layanan')->with('sukses',' Data berhasil di update');
    
            }
            catch(Exception $f){
                return redirect('/layanan')->with('gagal',' Data tidak dapat diupdate');
    
            }
          
        }
    
}

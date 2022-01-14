<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('LoginAdmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function authenticate(Request $request)
    {
        //
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admins = Admin::where('email', $request->email)->first();

        // if ($admins[0]->password == $request->password){
        if ($admins->password == $request->password){
            
            $data = $request->session()->all();
            $request->session()->put('nama', $data['name']);
            // return $admins;
            // exit();
            // $request->session()->put('name', $admins->nama_admin);
            // $request->session()->regenerate();

            return redirect('/homeAdmin');
        }

        return back()->withErrors([
            'email' => 'Login Failed',
        ]);
        // dd('berhasil login!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

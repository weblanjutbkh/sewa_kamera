<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyewa;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Penyewa";
        $penyewa=Penyewa::all();
        return view('admin.penyewa', compact('title','penyewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Input Data Penyewa";
        return view('admin.inputpenyewa', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penyewa = new Penyewa();
        
        $penyewa->id_penyewa = $request->input('id_penyewa', false);
        $penyewa->nama_penyewa = $request->input('nama_penyewa');
        $penyewa->nik = $request->input('nik');
        $penyewa->alamat = $request->input('alamat');
        $penyewa->no_hp = $request->input('no_hp');
        
        if ($request->hasfile('foto')){
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('upload/penyewa',$filename);
            $penyewa->foto = $filename;
        }else {
            return $request;
            $penyewa->foto = '';
        }
        $penyewa->save();
        return redirect('penyewa')->with('success','Data Berhasil Disimpan');
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

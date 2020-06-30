<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;


class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Karyawan";
        $karyawan= Karyawan::paginate(5);
        return view('admin.karyawan', compact('title','karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Input Data Karyawan";
        return view('admin.inputkaryawan', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Kolom :attribute harus diisi',
            'required' => 'Kolom :attribute harus diisi',
            'required' => 'Kolom :attribute harus diisi',
            'required' => 'Kolom :attribute harus diisi'
        ];
        $validasi = $request->validate([
            'id' => 'required',
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ],$messages);
        $karyawan=Karyawan::create($validasi);
        return redirect('karyawan')->with('success','Data berhasil diupdate');
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
        $title= 'Edit Data Karyawan';
        $karyawan =Karyawan::find($id);
        return view('admin.inputkaryawan', compact('karyawan','title'));
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
        $messages = [
            'required' => 'Kolom :attribute harus diisi',
            'required' => 'Kolom :attribute harus diisi',
            'required' => 'Kolom :attribute harus diisi',
            'required' => 'Kolom :attribute harus diisi'
        ];
        $validasi = $request->validate([
            'id' => 'required',
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ],$messages);
        $karyawan=Karyawan::whereid($id)->update($validasi);
        return redirect('karyawan')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::whereid($id)->delete();
        return redirect('karyawan')->with('success','Data berhasil diupdate');
    }
}
